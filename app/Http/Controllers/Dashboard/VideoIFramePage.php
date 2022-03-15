<?php 

class VideoIFramePage {

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

    public function __getUpdateForm($ID = null) {

        try {

            if(is_null($ID)) return redirect('error-status/500-error');

            // $video = DB::table('video_iframe')->where('vi_id', $ID)->get();
    
            // return view("pages/dashboard/plugins/video_iframe/update_form.view.php", [
            //     "video" => $video
            // ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }
}