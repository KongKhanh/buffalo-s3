<?php

class HomePage {

    private $siteInfo;

    function __construct() {

        $this->siteInfo = (new SiteInfoAPI())->__getSiteInfomation();

        $this->newsCate = DB::table("menu_cate")->where("mc_infor", 1)->get();

    }

    public function __getHomePage() {

        try {

            $menuCategories = DB::table('menu_cate')->where('mc_parent_id',0)->get();

            for($i = 0; $i < count($menuCategories); $i++){

                $childrenCategories = DB::table('menu_cate')->where('mc_parent_id',$menuCategories[$i]['mc_id'])->get();

                $menuCategories[$i]["childrenList"] = $childrenCategories;

            }

            $news = array_slice(array_reverse(DB::table("news")->get()), 0, 8);

            $bgUI = $this->__getBgUI();

            /**
             * Task: update number of access to page
             */
            (new SiteInfoAPI())->__updateNumberOfAccessToSite();
            $trainingTypeList = DB::table('level_of_training')->get();

            return view('pages/client/home.view.php', [
                'allMajors'                 => (new MajorPageClient())->__getAllMajors(),
                'siteInfo'                  => $this->siteInfo,
                'menuCategories'            => $menuCategories,
                "LevelOfTraining"           => (new LevelOfTraining())->__getAllLevelOfTraining(),
                "GoogleMapAddressEmbed"     => (new ThirdToolPage())->__getCodeByType("GMA001"),
                'trainingTypeList'          => $trainingTypeList,
                'news'                      => $news,
                'bgUI'                      => $bgUI,
            ]); 
        }
        catch (Exception $error){

            return redirect('error-status/404-error');
        }
    }

    public function __getAboutPage() {

        try {

            if($this->siteInfo["siteIntro"]["sii_status"] == "published") {

                return view('pages/client/about_us.view.php', [
                    'siteInfo'                  => $this->siteInfo,
                    'bgUI'                      => $this->__getBgUI(),
                ]);
            }

            return redirect('error-status/404-error');
        }
        catch (Exception $error) {

            return redirect('error-status/404-error');
        }
    }

    public function __getContactPage() {

        try {

            if($this->siteInfo["siteContact"]["sic_status"] == "published") {

                return view('pages/client/contact_us.view.php', [
                    'siteInfo'                  => $this->siteInfo,
                    'bgUI'                      => $this->__getBgUI(),
                ]);
            }

            return redirect('error-status/404-error');
        }
        catch (Exception $error) {

            return redirect('error-status/404-error');
        }
    }

    public function __postContactconsultForm(){

        try {

            $errors = [];

            $input = [
                
                "cc_name"           =>  input("cc_name"),
                "cc_phone"          =>  input("cc_phone"),
                "cc_note"           =>  input("cc_note")
            ];

            if(!preg_match('/^[a-zA-Z ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????]{4,32}$/',$input['cc_name'])){

                $errors = array_merge($errors, [
                    "error_cc_name" => "H??? v?? t??n ????ng ?????nh d???ng"
                ]);
            }

            if(!preg_match('/^(0)(1|3|5|7|8|9)+([0-9]{8})$/', $input['cc_phone'])){

                $errors = array_merge($errors, [
                    "error_cc_phone" => "S??? ??i???n tho???i kh??ng h???p l???"
                ]);
            }

            if(!($input['cc_note'])){

                $errors = array_merge($errors, [
                    "error_cc_note" => "Vui l??ng nh???p n???i dung"
                ]);

            }

            if(count($errors) == 0){

                DB::table('contact_consult')->insert($input);
    
                Session::flash("status_contact_consult", [
                    "status"        => true,
                    "masseger"      => "G???i th??ng tin li??n h??? th??nh c??ng"
                ]);
                
            }
            else{

                Session::flash("status_contact_consult", [
                    "status"        => false,
                    "errors"        => $errors,
                    "masseger"      => "G???i th??ng tin li??n h??? kh??ng th??nh c??ng"
                ]);

            }
            
            return redirect('/'); 
        }
        catch (Exception $error) {

            return false;
        }
    }

    public function __getContactConsult(){

        try{

            $ContactconsultLists = DB::table('contact_consult')->get();

            return view("pages/dashboard/contact_consult.view.php", [

                "ContactconsultLists"       => $ContactconsultLists
            ]);

        }
        catch (Exception $error){

            return false;
        }
    }

    public function __postUpdateStatusContactConsult($id){
        
        try{

            if(input("cc_status")) {

                $dataToUpDate = [

                    "cc_status"      => trim(input("cc_status"))
                ];

                $statusCC = DB::table('contact_consult')->where("cc_id",$id)->update($dataToUpDate);
            }

            if(!$statusCC){

                Session::flash("res_contact_consult_info", [
                    "status"        => "200",
                    "message"       => "C???p nh???t d??? li???u th???t b???i"
                ]);
            }

            return redirect('/dashboard/contact-consult');

        }
        catch(Exception $error){

            return false;
        }
    }
    
    public function __getContentContactConsult($id){

        header("Content-Type: application/json");

        try{

            $ccItem = DB::table('contact_consult')->where('cc_id',$id)->first();

            echo json_encode([
                
                "CcbyID" => $ccItem
            ]);

        }
        catch(Exception $error){

            return false;
        }
    }

    public function __getBgUI() {

        return $bgUI = [
            'headerBG'      =>     DB::table('site_ui_bg')->where('suib_code', 'A0001')->first(),
            'footerBG'      =>     DB::table('site_ui_bg')->where('suib_code', 'A0002')->first(),
        ];
    }


    public function __getMenuCateDetailPageClient($target) {

        try {

            if(isset($target) && is_array($this->newsCate)) {

                $ID_parsing = (explode("-", $target));

                $target = trim($ID_parsing[(count($ID_parsing) - 1)]);

                DB::table("post")->update([
                    "post_num_of_view" => DB::table("post")->where("post_id", $target)->value("post_num_of_view") + 1,
                ]);

                $postItem = DB::table("post")->where("post_id", $target)->first();

                if($postItem) {

                    return view('pages/client/infor_detail.view.php', [
                        "postItem"                  => $postItem,
                        "newsCate"                  => $this->newsCate,
                        'bgUI'                      => $this->__getBgUI(),
                    ]);
                }

                return redirect('error-status/404-error'); 
            }
            else {

                return redirect('error-status/404-error'); 
            }
        }
        catch(Exception $error) {

            return redirect('error-status/500-error'); 
        }
    }

}