<?php 

class MenuCatePage {

    protected $type_cate_menu = ["A001", "A002"];

    public function __getMenuCatePage() {

        try {

            $menu_cate = DB::table("menu_cate")->join("links", "mc_link_id", "=", "link_id")->where("mc_parent_id", 0)->get();

            if(isset($menu_cate) && is_array($menu_cate)) {

                for($i = 0; $i < count($menu_cate); $i++) {

                    $menu_cate[$i]["suba_cate"] = DB::table("menu_cate")->where("mc_parent_id",  $menu_cate[$i]["mc_id"])
                    ->join("links", "mc_link_id", "=", "link_id")
                    ->get();
                }

                return view("pages/dashboard/menucate.view.php", [
                    "menu_cate"         => $menu_cate
                ]);
            }

            return redirect('error-status/500-error');
        }

        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getAddForm($type = null) {

        try {

            if(!is_null($type)) {

                $typeCate   = isset(explode("-", $type)[0]) ? explode("-", $type)[0] : null;

                $parentID   = isset(explode("-", $type)[1]) ? explode("-", $type)[1] : 0;

                switch($typeCate) {

                    case "A001":
                        return view("pages/dashboard/components/plugins/menu_cate/add_form.view.php", [
                            "type_cate_menu"        => "A001",
                            "parentID"              => $parentID,
                            "lastNewsID"        => $this->__getLastRecordID()
                        ]);
                        break;

                    case "A002":

                        return view("pages/dashboard/components/plugins/menu_cate/add_form.view.php", [
                            "type_cate_menu"        => "A002",
                            "parentID"              => $parentID,
                            "lastNewsID"        => $this->__getLastRecordID()
                        ]);
                        break;

                    default: return redirect('error-status/404-error');
                }
            }
    
            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    
    public function __postAdd() {
       
        try {

            $input = [
                "mc_title"                  => !is_null(input("mc_title")) ? input("mc_title") : false, 
                "link_url"                  => !is_null(input("link_url")) ? input("link_url") : false, 
                "type_cate_menu"            => !is_null(input("type_cate_menu")) ? input("type_cate_menu") : false, 
            ];

            $existTCM = array_search($input["type_cate_menu"], $this->type_cate_menu, true);
            
            // if(!$input["type_cate_menu"] || $existTCM){

            //     return redirect('error-status/500-error');
            // };

            $rootTCM = 0;

            switch($input["type_cate_menu"]) {

                case "A001": 
                    $rootTCM = 1;
                    $mc_parent_id = 0; 
                    break;

                case "A002": 
                    $rootTCM = 2;
                    $mc_parent_id = input('mc_parent_id') ? input('mc_parent_id') : -1; 
                    break;

                default: return redirect('error-status/404-error');
            }

            $link_id = DB::table("links")->insertGetId([
                "link_lt_id"        => 2,
                "link_url"          => $input["link_url"],
            ]);
    
            $insert_status = $link_id ? DB::table("menu_cate")->insert([
                "mc_link_id"            => $link_id,
                "mc_title"              => $input["mc_title"],
                "mc_parent_id"          => $mc_parent_id, // Dynamic 
                "mc_uncle_id"           => ($rootTCM - 1),
                "mc_friend_id"          => $rootTCM,
            ]) : false;

            Session::flash("res_menu_cate_info", [
                "status"        => "200",
                "message"       => "Thêm dữ liệu thành công"
            ]);

            return redirect('/dashboard/menu-cate');
        }

        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getUpdateForm($id) {

        try {

            if(isset($id)) {

                $menuCateItem = DB::table("menu_cate")
                    ->where("mc_id", $id)
                    ->join("links", "mc_link_id", "=", "link_id")
                    ->first();

                return view("pages/dashboard/components/plugins/menu_cate/update_form.view.php", [

                    "menuCateItem"       => $menuCateItem,
                    "lastNewsID"        => $this->__getLastRecordID()
                ]);
            }
            else {

                return redirect('error-status/500-error'); 
            }
        }
        catch(Exception $error) {

            return redirect('error-status/500-error'); 
        }
    }

    public function __postUpdate($id) {

        try {

            $dataToUpDate = [];

            if(input("mc_title")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "mc_title"      => trim(input("mc_title"))
                ]);
            }

            if(input("mc_status")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "mc_status"      => trim(input("mc_status"))
                ]);
            }

            $mcItem = DB::table("menu_cate")->where("mc_id",$id)->first();

            if(input("link_url")){

                $input = [
                    
                        "link_url"  => !is_null(input("link_url")) ? input("link_url") : false, 
                ];

                DB::table("links")->where("link_id", $mcItem['mc_link_id'])->update($input);
            }
            if(isset($id) && count($dataToUpDate) > 0) {

                $statusUpdate = DB::table("menu_cate")->where("mc_id", $id)->update($dataToUpDate);

                if($statusUpdate && $statusUpdate != 0) {

                    Session::flash("res_menu_cate_info", [
                        "status"        => "200",
                        "message"       => "Cập nhật dữ liệu thành công"
                    ]);

                    redirect('/dashboard/menu-cate');
                }

                return redirect('error-status/500-error'); 
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
                "mc_id"        => input("mc_id")
            ];

            if($input["mc_id"]) {

                $mcItem = DB::table("menu_cate")->where("mc_id", $input["mc_id"])->first();

                DB::table("links")->where("link_id", $mcItem['mc_link_id'])->delete();

                DB::table("menu_cate")->where("mc_id", $input["mc_id"])->delete();
                
                Session::flash("res_menu_cate_info", [
                    "status"        => "200",
                    "message"       => "Xóa dữ liệu thành công"
                ]);

                redirect('/dashboard/menu-cate');
            }

            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    /**
     * @return array
     */
    public function __getMenuCateAPI() {

        try {

            $menu_cate = DB::table("menu_cate")
            ->join("links", "mc_link_id", "=", "link_id")
            ->where("mc_parent_id", 0)->get();

            if(isset($menu_cate) && is_array($menu_cate)) {
    
                for($i = 0; $i < count($menu_cate); $i++) {
    
                    $menu_cate[$i]["subCate"] = DB::table("menu_cate")->where("mc_parent_id",  $menu_cate[$i]["mc_id"])
                    ->join("links", "mc_link_id", "=", "link_id")
                    ->get();
                }
            }

            return $menu_cate;
        }
        catch(Exception $error) {

            return array();
        }
    }
    public function __getLastRecordID() {

        $ID = DB::table("menu_cate")->max('mc_id');

        if($ID) return $ID;

        return 0;
    }
}