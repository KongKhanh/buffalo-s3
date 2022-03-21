<?php 

class AdsSlide {

    public function __getAllAdsSlide() {

        try {

            return DB::table('ads_slide')->get();
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getAllAdsSlideByStatus() {

        try {

            return DB::table('ads_slide')->where('ads_slide_status', 'published')->get();
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getAdsSlideDashboar() {

        try{

            $AdsSlideList = DB::table('ads_slide')->get();

            return view("pages/dashboard/ads_slide.view.php", [

                'AdsSlideList'              => $AdsSlideList
            ]);
            
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getUpdateForm($id) {

        try {

            if(isset($id)) {

                $adsSlideItem = DB::table("ads_slide")
                ->where("ads_slide_id", $id)
                ->first();

                if($adsSlideItem) {

                    return view("pages/dashboard/components/plugins/ads_slide/update_form.view.php", [

                        "adsSlideItem"              => $adsSlideItem,
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

    public function __postUpdateForm($id) {

        try {

            $dataToUpdate = [];

            if(input('ads_slide_title')) {

                $dataToUpdate = array_merge($dataToUpdate, [
                    'ads_slide_title'        => trim(input('ads_slide_title')),
                ]);
            }

            if(input('ads_slide_link_to')) {

                $dataToUpdate = array_merge($dataToUpdate, [
                    'ads_slide_link_to'        => trim(input('ads_slide_link_to')),
                ]);
            }

            if(input('ads_slide_status')) {

                $dataToUpdate = array_merge($dataToUpdate, [

                    'ads_slide_status'        => trim(input('ads_slide_status')),
                ]);
            }
            if(input('ads_slide_img_link') && !empty(input('ads_slide_img_link')['name'])) {

                $dataToUpdate = array_merge($dataToUpdate, [
                    'ads_slide_img_link'        => input('ads_slide_img_link'),
                ]);

                $dataToUpdate["ads_slide_img_link"] = array_merge($dataToUpdate["ads_slide_img_link"], [
                    'target_dir'        =>      'public/storage/images/ads_slide/'
                ]);

                $statusMove = SingleHelper::moveFile($dataToUpdate["ads_slide_img_link"]);

                $dataToUpdate["ads_slide_img_link"] =  $statusMove == true ? "/" . $dataToUpdate["ads_slide_img_link"]["target_dir"] . $dataToUpdate["ads_slide_img_link"]["name"] : null;

            }

            if($id){
                
             $statusUpdate = DB::table("ads_slide")->where("ads_slide_id", $id)->update($dataToUpdate);

                Session::flash("ads_slide_infor", [
                    "status"        => "200",
                    "message"       => "Cập nhật dữ liệu thành công"
                ]);

                return redirect('/dashboard/ads-slide');
                
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
                "ads_slide_id"        => input("ads_slide_id")
            ];

            if($input["ads_slide_id"]) {

                $status = DB::table("ads_slide")->where("ads_slide_id", $input["ads_slide_id"])->delete();

                Session::flash("ads_slide_infor", [
                    "status"        => "200",
                    "message"       => "Xóa dữ liệu thành công"
                ]);

                redirect('/dashboard/ads-slide');
            }

            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getAdsSlideAddForm(){
        try{

            return view("pages/dashboard/components/plugins/ads_slide/add_form.view.php", [
            ]);
            
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }
    public function __postAdsSlideAddForm() {

        try {

            $dataToUpdate = [];

            if(input('ads_slide_title')) {

                $dataToUpdate = array_merge($dataToUpdate, [
                    'ads_slide_title'        => trim(input('ads_slide_title')),
                ]);
            }

            if(input('ads_slide_link_to')) {

                $dataToUpdate = array_merge($dataToUpdate, [
                    'ads_slide_link_to'        => trim(input('ads_slide_link_to')),
                ]);
            }

            if(input('ads_slide_img_link') && !empty(input('ads_slide_img_link')['name'])) {

                $dataToUpdate = array_merge($dataToUpdate, [
                    'ads_slide_img_link'        => input('ads_slide_img_link'),
                ]);

                $dataToUpdate["ads_slide_img_link"] = array_merge($dataToUpdate["ads_slide_img_link"], [
                    'target_dir'        =>      'public/storage/images/'
                ]);

                $statusMove = SingleHelper::moveFile($dataToUpdate["ads_slide_img_link"]);

                $dataToUpdate["ads_slide_img_link"] =  $statusMove == true ? "/" . $dataToUpdate["ads_slide_img_link"]["target_dir"] . $dataToUpdate["ads_slide_img_link"]["name"] : null;

            }

            if($dataToUpdate){
                
             $statusUpdate = DB::table("ads_slide")->insert($dataToUpdate);

                Session::flash("ads_slide_infor", [
                    "status"        => "200",
                    "message"       => "Thêm mới dữ liệu thành công"
                ]);

                return redirect('/dashboard/ads-slide');
                
            }
            else {

                return redirect('error-status/500-error'); 
            }
        }
        catch(Exception $error) {

            return redirect('error-status/500-error'); 
        }
    }
}