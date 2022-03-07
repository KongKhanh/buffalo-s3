<?php 

class MenuCatePage {

    public function __getMenuCatePage() {

        try {

            $menu_cate = DB::table("menu_cate")->where("mc_parent_id", 0)->get();

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

    public function __getUpdateForm($id) {

        try {

            if(isset($id)) {

                $menuCateItem = DB::table("menu_cate")
                ->where("mc_id", $id)
                ->join("links", "mc_link_id", "=", "link_id")
                ->first();

                if($menuCateItem) {

                    return view("pages/dashboard/components/plugins/menu_cate/update_form.view.php", [

                        "menuCateItem"       => $menuCateItem
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

                $status = DB::table("menu_cate")->where("mc_id", $input["mc_id"])->delete();

                Session::flash("res_menu_cate_info", [
                    "status"        => "200",
                    "message"       => "Xóa dữ liệu thành công"
                ]);

                redirect('/dashboard/menu-cate');
            }

            // return redirect('error-status/500-error');
        }
        catch(Exeption $error) {

            return redirect('error-status/500-error');
        }
    }
}