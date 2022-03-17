<?php

class AboutUs {

    public function __construct() {

        
    }

    
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

            /**
             * Logo area
             */
            if(input('site_info_main_logo')) {

                $dataToUpdate = array_merge($dataToUpdate, [
                    'site_info_main_logo'        => input('site_info_main_logo'),
                ]);

                $dataToUpdate["site_info_main_logo"] = array_merge($dataToUpdate["site_info_main_logo"], [
                    'target_dir'        =>      'public/storage/images/default/'
                ]);

                $statusMove = SingleHelper::moveFile($dataToUpdate["site_info_main_logo"]);

                $dataToUpdate["site_info_main_logo"] =  $statusMove == true ? "/" . $dataToUpdate["site_info_main_logo"]["target_dir"] . $dataToUpdate["site_info_main_logo"]["name"] : null;
            }

            $statusUpdate = DB::table("site_info")->where("site_info_id", (new SiteInfoAPI())->__getVersionInfo())->update($dataToUpdate);

            /**
             * Phone area
             */
            if(input('sip_phone_1')) {

                DB::table("site_info_phone")->where("sip_id", 1)->update([
                    'sip_phone'         => trim(input('sip_phone_1')),
                ]);
            }

            if(input('sip_phone_2')) {

                DB::table("site_info_phone")->where("sip_id", 2)->update([
                    'sip_phone'         => trim(input('sip_phone_2')),
                ]);
            }

            /**
             * Email area
             */
            if(input('sie_email_1')) {

                DB::table("site_info_email")->where("sie_id", 1)->update([
                    'sie_email'         => trim(input('sie_email_1')),
                ]);
            }

            if(input('sie_email_2')) {

                DB::table("site_info_email")->where("sie_id", 2)->update([
                    'sie_email'         => trim(input('sie_email_2')),
                ]);
            }

            /**
             * Address area
             */
            if(input('sia_address_1')) {

                DB::table("site_info_address")->where("sia_id", 1)->update([
                    'sia_address'         => trim(input('sia_address_1')),
                ]);
            }

            if(input('sia_address_2')) {

                DB::table("site_info_address")->where("sia_id", 2)->update([
                    'sia_address'         => trim(input('sia_address_2')),
                ]);
            }

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