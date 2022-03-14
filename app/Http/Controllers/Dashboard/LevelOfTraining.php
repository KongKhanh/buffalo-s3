<?php 

class LevelOfTraining {

    public function __getLevelOfTrainingPage() {

        try {

            $levelOfTraining = DB::table("level_of_training")->get();

            if(!is_array($levelOfTraining)) return redirect('error-status/500-error');

            return view("pages/dashboard/leveloftraining.view.php", [

                "levelOfTraining"               => $levelOfTraining,
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    /**
     * @return array
     */
    public function __getAllLevelOfTraining() {

        try {

            $levelOfTraining = DB::table("level_of_training")->get();

            for($i = 0; $i < count($levelOfTraining); $i++) {

                $levelOfTraining[$i]["majors"] = DB::table("majors")->where("mjr_lot_id",  $levelOfTraining[$i]["lot_id"])->get();
            }

            if(!is_array($levelOfTraining)) return array();

            return $levelOfTraining;
        }
        catch(Exception $error) {

            return array();
        }
    }
    
    public function __getUpdateForm($id){

        try{

            $levelOfTrainingItem = DB::table("level_of_training")->where("lot_id",$id)->first();

            return view("pages/dashboard/components/plugins/level_of_training/update_form.view.php", [

                "levelOfTrainingItem"               => $levelOfTrainingItem,
            ]);
        }
        catch (Exception $error){

            return redirect('error-status/500-error');

        }
    }

    public function __postUpdateForm($id) {

        try {

            $dataToUpDate = [];

            if(input("lot_name")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "lot_name"      => trim(input("lot_name"))
                ]);
            }

            if(input("lot_code")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "lot_code"      => input("lot_code")
                ]);
            }

            if(input("lot_status")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "lot_status"      => input("lot_status")
                ]);
            }

            if(input("lot_main_profile")) {

                $input["lot_main_profile"] = array_merge(input("lot_main_profile"), [
                    'target_dir'        =>      'public/storage/images/'
                ]);

                $statusMove = SingleHelper::moveFile($input["lot_main_profile"]);

                $dataToUpDate = array_merge($dataToUpDate, [

                    "lot_main_profile"      => $statusMove ? "/" . $input["lot_main_profile"]["target_dir"] . $input["lot_main_profile"]["name"] : null,
                ]);
            }

            if($id) {

                $statusUpdate = DB::table("level_of_training")->where("lot_id", $id)->update($dataToUpDate);

                Session::flash("res_level_of_training_infor", [
                    "status"        => "200",
                    "message"       => "Cập nhật dữ liệu thành công"
                ]);

                return redirect('/dashboard/level-of-training');
                
            }
            else {

                return redirect('error-status/500-error'); 
            }
        }
        catch(Exception $error) {

            return redirect('error-status/500-error'); 
        }
    }

    public function __postDelete() {

        try {

            $input = [
                "lot_id"        => input("lot_id")
            ];

            if($input["lot_id"]) {

                $status = DB::table("level_of_training")->where("lot_id", $input["lot_id"])->delete();

                Session::flash("res_level_of_training_infor", [
                    "status"        => "200",
                    "message"       => "Xóa dữ liệu thành công"
                ]);

                redirect('/dashboard/level-of-training');
            }

            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getAddForm() {

        try {

            return view("pages/dashboard/components/plugins/level_of_training/add_form.view.php", [

            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postAdd() {

        try {

            $input = [
                "lot_name"                  => !is_null(input("lot_name")) ? input("lot_name") : false, 
                "lot_code"                  => !is_null(input("lot_code")) ? input("lot_code") : false, 
            ];

            $input["lot_main_profile"] = input("lot_main_profile") ? input("lot_main_profile") : false;

            $input["lot_main_profile"] = array_merge($input["lot_main_profile"], [
                'target_dir'        =>      'public/storage/images/'
            ]);

            $statusMove = SingleHelper::moveFile($input["lot_main_profile"]);

            $input["lot_main_profile"] = $statusMove ? "/" . $input["lot_main_profile"]["target_dir"] . $input["lot_main_profile"]["name"] : null;

            $res_level_of_training_infor = DB::table("level_of_training")->insert($input);

            if($res_level_of_training_infor) {

                Session::flash("res_level_of_training_infor", [
                    "status"        => "200",
                    "message"       => "Thêm dữ liệu thành công"
                ]);

                redirect('/dashboard/level-of-training');

            }
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }
}