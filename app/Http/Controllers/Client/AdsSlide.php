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
}