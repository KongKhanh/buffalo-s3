<?php

class AboutUs {

    
    public function __getUpdateIntro() {

        try {

            return view("pages/dashboard/components/plugins/aboutus/update_intro.view.php", [

                "siteIntro"       => (new SiteInfoAPI())->__getSiteIntro((new SiteInfoAPI())->__getVersionInfo())
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postUpdateIntro() {

        try {

            $introInfo = [
                "sii_intro"        => input('sii_intro')
            ];

            if(input('sii_status') == "published" || input('sii_status') == "hidden") {

                $introInfo = [
                    "sii_status" => input('sii_status'),
                ];
            }

            if(is_null($introInfo)) return redirect('error-status/500-error');

            $statusUpdate = DB::table("site_info_intro")
            ->where("sii_si_id", (new SiteInfoAPI())->__getVersionInfo())
            ->update($introInfo);

            if($statusUpdate && $statusUpdate != 0) {

                Session::flash("res_site_intro_info", [
                    "status"        => "200",
                    "message"       => "Cập nhật dữ liệu thành công"
                ]);
            }
            else {

                Session::flash("res_site_intro_info", [
                    "status"        => "500",
                    "message"       => "Cập nhật dữ liệu thất bại"
                ]);
            }

            return redirect('dashboard/about-us/introduce/edit');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getUpdateContact() {

        try {

            return view("pages/dashboard/components/plugins/aboutus/update_contact.view.php", [

                "siteContact"       => (new SiteInfoAPI())->__getSiteContact((new SiteInfoAPI())->__getVersionInfo())
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postUpdateContact() {

        try {

            $contactInfo = [
                "sic_contact"        => input('sic_contact')
            ];

            if(input('sic_status') == "published" || input('sic_status') == "hidden") {

                $contactInfo = [
                    "sic_status" => input('sic_status'),
                ];
            }

            if(is_null($contactInfo)) return redirect('error-status/500-error');

            $statusUpdate = DB::table("site_info_contact")
            ->where("sic_si_id", (new SiteInfoAPI())->__getVersionInfo())
            ->update($contactInfo);

            if($statusUpdate && $statusUpdate != 0) {

                Session::flash("res_site_contact_info", [
                    "status"        => "200",
                    "message"       => "Cập nhật dữ liệu thành công"
                ]);
            }
            else {

                Session::flash("res_site_contact_info", [
                    "status"        => "500",
                    "message"       => "Cập nhật dữ liệu thất bại"
                ]);
            }

            return redirect('dashboard/about-us/contact/edit');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }
    
    public function __getUpdateInformation() {

        try {

            return view("pages/dashboard/components/plugins/aboutus/update_information.view.php", [

                "siteInfo"       => (new SiteInfoAPI())->__getSiteInfomation()
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postUpdateInformation() {

        try {

            $dataToUpdate = [];

            if(input('site_info_name')) {

                $dataToUpdate = array_merge($dataToUpdate, [
                    'site_info_name'        => trim(input('site_info_name')),
                ]);
            }

            if(input('site_info_short_description')) {

                $dataToUpdate = array_merge($dataToUpdate, [
                    'site_info_short_description'        => trim(input('site_info_short_description')),
                ]);
            }

            $statusUpdate = DB::table("site_info")->where("site_info_id", (new SiteInfoAPI())->__getVersionInfo())->update($dataToUpdate);

            Session::flash("res_status", [
                "status"        => "200",
                "message"       => "Cập nhật dữ liệu thành công"
            ]);

            return redirect('dashboard/about-us/information-getting/edit');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }
}