<?php

class MajorsPage {

    protected $level_of_training = [];
    
    function __construct() {

        $this->level_of_training = DB::table("level_of_training")->get();
    }

    public function __majorsPage() {

        try {

            $majors = DB::table('majors')
                ->join("level_of_training", "majors.mjr_lot_id", "=", "level_of_training.lot_id")
                ->get();

            if(!$majors || !is_array($majors)) {

                return redirect('error-status/500-error');
            };

            return view('pages/dashboard/majors.view.php', [
    
                "majors"    => $majors
            ]);
        }
        catch (Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getAddForm() {

        try {

            if(!isset($this->level_of_training) && !is_array($this->level_of_training)) {
    
                return redirect('error-status/500-error');
            }
    
            return view("pages/dashboard/components/plugins/majors/add_form.view.php", [

                "level_of_training"       => $this->level_of_training
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postAdd() {

        try {

            $input = [
                "mjr_name"                  => !is_null(input("mjr_name")) ? input("mjr_name") : false, 
                "mjr_lot_id"                => !is_null(input("mjr_lot_id")) ? input("mjr_lot_id") : false, 
                "mjr_code"                  => !is_null(input("mjr_code")) ? input("mjr_code") : false, 
                "mjr_main_description"      => !is_null(input("mjr_main_description")) ? input("mjr_main_description") : false,
            ];
    
            $majors_insert_status = DB::table("majors")->insert($input);

            if($majors_insert_status) {

                Session::flash("res_majors_cate_info", [
                    "status"        => "200",
                    "message"       => "Thêm dữ liệu thành công"
                ]);

                redirect('/dashboard/majors');
            }
        }

        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getUpdateForm($id) {

        try {

            if(isset($id)) {

                $majorsItem = DB::table("majors")
                ->where("mjr_id", $id)
                ->join("level_of_training", "mjr_lot_id", "=", "lot_id")
                ->first();

                if($majorsItem) {

                    return view("pages/dashboard/components/plugins/majors/update_form.view.php", [

                        "majorsItem"                => $majorsItem,
                        "level_of_training"         => $this->level_of_training
                    ]);
                }

                return redirect('error-status/404-error'); 
            }
            else {

                return redirect('error-status/500-error'); 
            }
        }
        catch(Exception $error) {

            return redirect('error-status/500-error'); 
        }
    }

    public function __postUpdate($id) {

        try {

            $dataToUpDate = [];

            if(input("mjr_name")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "mjr_name"      => trim(input("mjr_name"))
                ]);
            }

            if(input("mjr_lot_id")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "mjr_lot_id"      => input("mjr_lot_id")
                ]);
            }

            if(input("mjr_code")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "mjr_code"      => input("mjr_code")
                ]);
            }

            if(input("mjr_status")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "mjr_status"      => input("mjr_status")
                ]);
            }

            if(isset($id) && count($dataToUpDate) > 0) {

                $statusUpdate = DB::table("majors")->where("mjr_id", $id)->update($dataToUpDate);

                if($statusUpdate && $statusUpdate != 0) {

                    Session::flash("res_majors_cate_info", [
                        "status"        => "200",
                        "message"       => "Cập nhật dữ liệu thành công"
                    ]);

                    redirect('dashboard/majors');
                }

                return redirect('error-status/500-error'); 
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
                "mjr_id"        => input("mjr_id")
            ];

            if($input["mjr_id"]) {

                $status = DB::table("majors")->where("mjr_id", $input["mjr_id"])->delete();

                Session::flash("res_majors_cate_info", [
                    "status"        => "200",
                    "message"       => "Xóa dữ liệu thành công"
                ]);

                redirect('/dashboard/majors');
            }

            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    /**
     * @return JSON type
     */
    public function __getMajorsById($id) {

        try {

            $majors = DB::table('majors')->where("mjr_lot_id", $id)->get();

            if(!$majors || !is_array($majors)) {

                return false;
            };

          echo json_encode([
              
            "majorsById" => $majors
          ]);

        }
        catch (Exception $error) {

            return false;
        }
    }
}
