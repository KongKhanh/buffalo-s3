<?php

    class UiBackground{

        public function __getInsertBackgroundForm(){
            try{

                return view("pages/dashboard/ui_background.view.php", [

                ]);
            }
            catch(Exception $error){

                return redirect('error-status/500-error');
            }
        }
        public function __addBackgroundform(){

            try{

                $dataToUpdate = [];

                if(input('suib_img') && !empty(input('suib_img')['name'])) {

                    $dataToUpdate = array_merge($dataToUpdate, [
                        'suib_img'        => input('suib_img'),
                    ]);
    
                    $dataToUpdate["suib_img"] = array_merge($dataToUpdate["suib_img"], [
                        'target_dir'        =>      'public/storage/images/'
                    ]);
    
                    $statusMove = SingleHelper::moveFile($dataToUpdate["suib_img"]);
    
                    $dataToUpdate["suib_img"] =  $statusMove == true ? "/" . $dataToUpdate["suib_img"]["target_dir"] . $dataToUpdate["suib_img"]["name"] : null;
    
                }

                if($dataToUpdate){

                    $status = DB::table("site_ui_bg")->insert($dataToUpdate);

                    Session::flash("ui_bg_infor", [
                        "status"        => "200",
                        "message"       => "Thêm mới dữ liệu thành công"
                    ]);
    
                    return redirect('/dashboard/ui-background');
                }
            }
            catch(Exception $error){

                return false;
            }
        }
    }