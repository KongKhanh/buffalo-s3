<?php 

class SiteInfoAPI {

    private $version = 1;

    public function __getVersionInfo() {

        return $this->version;
    }

    public function __getSiteInfomation() {

        try {

            $siteInfo = DB::table("site_info")->where('site_info_id', $this->version)->first();

            if(isset($siteInfo) && $siteInfo) {

                $siteInfo = array_merge($siteInfo, [
                    "sitePhone"         =>   $this->__getSitePhone($siteInfo["site_info_id"]),
                    "siteEmail"         =>   $this->__getSiteEmail($siteInfo["site_info_id"]),
                    "siteAddress"       =>   $this->__getSiteAddress($siteInfo["site_info_id"]),
                    "siteIntro"         =>   $this->__getSiteIntro($siteInfo["site_info_id"]),
                ]);

                return $siteInfo;
            }

            return false;
        }
        catch(Exception $error) {

            return false;
        }
    }

    public function __getSitePhone($siteID = null) {

        try {

            if(is_null($siteID)) return [];

            return DB::table("site_info_phone")->where('sip_si_id', $siteID)->get();
        }
        catch(Exception $error) {

            return false;
        }
    }

    public function __getSiteEmail($siteID = null) {

        try {

            if(is_null($siteID)) return [];

            return DB::table("site_info_email")->where('sie_si_id', $siteID)->get();
        }
        catch(Exception $error) {

            return false;
        }
    }

    public function __getSiteAddress($siteID = null) {

        try {

            if(is_null($siteID)) return [];

            return DB::table("site_info_address")->where('sia_si_id', $siteID)->get();
        }
        catch(Exception $error) {

            return false;
        }
    }

    public function __getSiteIntro($siteID = null) {

        try {

            if(is_null($siteID)) return [];

            return DB::table("site_info_intro")->where('sii_si_id', $siteID)->first();
        }
        catch(Exception $error) {

            return false;
        }
    }
}