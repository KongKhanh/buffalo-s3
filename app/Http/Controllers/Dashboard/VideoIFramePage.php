<?php 

class VideoIFramePage {

    public function __construct() {

    
    }

    public function __getVideoPage() {

        try {

            $videoList = DB::table('video_iframe')->get();
    
            return view("pages/dashboard/video-iframe.view.php", [
                "videoList" => $videoList
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getAddForm() {

        try {

            return view("pages/dashboard/components/plugins/video_iframe/add_form.view.php");
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    
    public function __postAdd() {

        try {

            $input = [
                "vi_title"                   => !is_null(input("vi_title")) ? input("vi_title") : false, 
                "vi_content"                 => !is_null(input("vi_content")) ? input("vi_content") : false,  
            ];

            DB::table("video_iframe")->insert($input);

            Session::flash("res_status_info", [
                "status"        => "200",
                "message"       => "Thêm dữ liệu thành công"
            ]);

            redirect('/dashboard/video-iframe'); 
        }

        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getUpdateForm($ID = null) {

        try {

            if(is_null($ID)) return redirect('error-status/500-error');

            $video = DB::table('video_iframe')->where('vi_id', $ID)->first();

            return view("pages/dashboard/components/plugins/video_iframe/update_form.view.php", [
                "video" => $video
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postUpdate($id) {

        try {

            $dataToUpDate = [];

            if(input("vi_title")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "vi_title"      => trim(input("vi_title"))
                ]);
            }

            if(input("vi_content")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "vi_content"      => input("vi_content")
                ]);
            }
            if(input("vi_status")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "vi_status"      => input("vi_status")
                ]);
            }

            if(isset($id)) {

                $statusUpdate = DB::table("video_iframe")->where("vi_id", $id)->update($dataToUpDate);  

                Session::flash("res_status_info", [
                    "status"        => "200",
                    "message"       => "Cập nhật dữ liệu thành công"
                ]);
                
                redirect('/dashboard/video-iframe');
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
                "vi_id"        => input("vi_id")
            ];

            if($input["vi_id"]) {

                $status = DB::table("video_iframe")->where("vi_id", $input["vi_id"])->delete();

                Session::flash("res_status_info", [
                    "status"        => "200",
                    "message"       => "Xóa dữ liệu thành công"
                ]);

                redirect('/dashboard/video-iframe');
            }

            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }
}