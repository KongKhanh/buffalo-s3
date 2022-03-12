<?php

class AboutUs {

    
    public function __getUpdateIntro() {

        try {

            return view("pages/dashboard/components/plugins/aboutus/update_intro.view.php");
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postUpdateIntro() {

        try {

            $introInfo = [
                "aa"        => input('sii_intro')
            ];

            var_dump($introInfo);

            return;

        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }
}