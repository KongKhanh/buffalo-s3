<?php

class HomePage {

    private $siteInfo;

    function __construct() {

        $this->siteInfo = (new SiteInfoAPI())->__getSiteInfomation();
    }

    public function __getHomePage() {

        try {

            $menuCategories = DB::table('menu_cate')->where('mc_parent_id',0)->get();

            for($i = 0; $i < count($menuCategories); $i++){

                $childrenCategories = DB::table('menu_cate')->where('mc_parent_id',$menuCategories[$i]['mc_id'])->get();

                $menuCategories[$i]["childrenList"] = $childrenCategories;
            }

            $news = array_slice(array_reverse(DB::table("news")->get()), 0, 8);

            $bgUI = [
                'headerBG'      =>     DB::table('site_ui_bg')->where('suib_code', 'A0001')->first(),
                'footerBG'      =>     DB::table('site_ui_bg')->where('suib_code', 'A0002')->first(),
            ];

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

            if(!preg_match('/^[a-zA-Z ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,32}$/',$input['cc_name'])){

                $errors = array_merge($errors, [
                    "error_cc_name" => "Họ và tên đúng định dạng"
                ]);
            }

            if(!preg_match('/^(0)(1|3|5|7|8|9)+([0-9]{8})$/', $input['cc_phone'])){

                $errors = array_merge($errors, [
                    "error_cc_phone" => "Số điện thoại không hợp lệ"
                ]);
            }

            if(!($input['cc_note'])){

                $errors = array_merge($errors, [
                    "error_cc_note" => "Vui lòng nhập nội dung"
                ]);

            }

            if(count($errors) == 0){

                DB::table('contact_consult')->insert($input);
    
                Session::flash("status_contact_consult", [
                    "status"        => true,
                    "masseger"      => "Gửi thông tin liên hệ thành công"
                ]);
                
            }
            else{

                Session::flash("status_contact_consult", [
                    "status"        => false,
                    "errors"        => $errors,
                    "masseger"      => "Gửi thông tin liên hệ không thành công"
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
                    "message"       => "Cập nhật dữ liệu thất bại"
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
}