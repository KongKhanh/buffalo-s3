<?php 
    class InforPage{

        protected $inforCate = [];

        public function __construct() {
    
            $this->inforCate = DB::table("menu_cate")->where("mc_parent_id",0)->get();
        }
    
        public function __getInforPage() {

            try {
    
                $postList = DB::table('post')
                ->join("links", "post_link_id", "=", "link_id")
                ->get();
        
                return view("pages/dashboard/post.view.php", [
                    "postList" => $postList
                ]);
            }
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }

        public function __getAddForm() {

            try {
    
                if(!isset($this->inforCate) && !is_array($this->inforCate)) {
        
                    return redirect('error-status/500-error');
                }
        
                return view("pages/dashboard/components/plugins/infor/add_form.view.php", [
    
                    "inforCate"          => $this->inforCate,
                    "lastInforId"        => $this->__getLastRecordID()
                ]);
            }
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }
    
        public function __postAddForm() {
    
            try {
    
                $input = [
                    "post_title"                        => !is_null(input("post_title")) ? input("post_title") : false, 
                    "post_menu_id"                      => !is_null(input("post_menu_id")) ? input("post_menu_id") : false, 
                    "link_url"                          => !is_null(input("link_url")) ? input("link_url") : false, 
                    "post_content"                      => !is_null(input("post_content")) ? input("post_content") : false, 
                    "post_created_by"                   => "0",
                ];
    
                $link_id = DB::table("links")->insertGetId([
                    "link_lt_id"                => 3, 
                    "link_url"                  => $input["link_url"],  
                ]);

                $link_id ? $post_insert_status = DB::table("post")->insert([
                        "post_title"                            => $input["post_title"], 
                        "post_menu_id"                          => $input["post_menu_id"],  
                        "post_link_id"                          => $link_id,
                        "post_content"                          => $input["post_content"], 
                        "post_created_by"                       => "0"
                    ]) : false;

                if($post_insert_status) {
    
                    Session::flash("res_news_info", [
                        "status"        => "200",
                        "message"       => "Thêm dữ liệu thành công"
                    ]);
    
                    redirect('/dashboard/infor');
                }
            }
    
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }
    
        public function __getUpdateForm($id) {
    
            try {
    
                if($id) {
    
                    $post = DB::table("post")->where("post_id", $id)->join("links", "post_link_id", "=", "link_id")->first();
    
                    if(isset($post)) {
    
                        return view("pages/dashboard/components/plugins/infor/update_form.view.php", [
                            "inforCate"          => $this->inforCate,
                            "post"              => $post
                        ]);
                    }
                }
    
                return redirect('error-status/500-error');
            }
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }
    
        public function __postUpdate($id) {
    
            try {
    
                $dataToUpDate = [];
    
                if(input("post_title")) {
    
                    $dataToUpDate = array_merge($dataToUpDate, [
    
                        "post_title"      => trim(input("post_title"))
                    ]);
                }
                if(input("post_menu_id")) {
    
                    $dataToUpDate = array_merge($dataToUpDate, [
    
                        "post_menu_id"      => input("post_menu_id")
                    ]);
                }
    
                if(input("post_content")) {
    
                    $dataToUpDate = array_merge($dataToUpDate, [
    
                        "post_content"      => input("post_content")
                    ]);
                }
    
                if(input("post_status")) {
    
                    $dataToUpDate = array_merge($dataToUpDate, [
    
                        "post_status"      => input("post_status")
                    ]);
                }

                $postItem = DB::table("post")->where("post_id", $id)->first();

                $link_id = DB::table("links")->where("link_id",$postItem['post_link_id'])->update([
                    "link_url"      =>   input("link_url")
                ]);

                if(isset($link_id) && isset($id)) {
    
                    $statusUpdate = DB::table("post")->where("post_id", $id)->update($dataToUpDate);  
    
                    if($statusUpdate && $statusUpdate != 0) {
    
                        Session::flash("res_news_info", [
                            "status"        => "200",
                            "message"       => "Cập nhật dữ liệu thành công"
                        ]);
                    }
    
                    return redirect('dashboard/infor');
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
                    "post_id"        => input("post_id")
                ];
    
                if($input["post_id"]) {
    
                    $postItem = DB::table("post")->where("post_id", $input["post_id"])->first();
    
                    DB::table("links")->where("link_id",$postItem["post_link_id"])->delete();
    
                    DB::table("post")->where("post_id", $input["post_id"])->delete();
    
                    Session::flash("res_news_info", [
                        "status"        => "200",
                        "message"       => "Xóa dữ liệu thành công"
                    ]);
    
                    return redirect('/dashboard/infor');
                }
    
                return redirect('error-status/500-error');
            }
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }
    
        /**
         * ----------------------------------------------News Categories --------------------------------
         */
        public function __getinforCategoryPage() {
    
            try {
    
                if(!isset($this->inforCate) && !is_array($this->inforCate)) {
        
                    return redirect('error-status/500-error');
                }
        
                return view("pages/dashboard/news_cate.view.php", [
    
                    "inforCate"              => $this->inforCate
                ]);
            }
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }
    
        public function __getinforCategoryForm($id){
    
            try {
    
                if($id) {
    
                    $formCategory = DB::table("news_category")->where("news_cate_id", $id)->first();
    
                    if(isset($formCategory)) {
    
                        return view("pages/dashboard/components/plugins/news_category/update_form.view.php", [
    
                            "formCategory"              => $formCategory
                        ]);
                    }
                }
    
                return redirect('error-status/500-error');
            }
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }
    
        public function __postinforCategoryForm($id){
    
            try {
    
                $dataToUpDate = [];
    
                if(input("news_cate_title")) {
    
                    $dataToUpDate = array_merge($dataToUpDate, [
    
                        "news_cate_title"      => trim(input("news_cate_title"))
                    ]);
    
                }
    
                if(input("news_cate_status")) {
    
                    $dataToUpDate = array_merge($dataToUpDate, [
    
                        "news_cate_status"      => trim(input("news_cate_status"))
                    ]);
                }
    
                if(isset($id) && count($dataToUpDate) > 0) {
    
                    $statusUpdate = DB::table("news_category")->where("news_cate_id", $id)->update($dataToUpDate);
    
                    if($statusUpdate && $statusUpdate != 0) {
    
                        Session::flash("res_menu_cate_info", [
                            "status"        => "200",
                            "message"       => "Cập nhật dữ liệu thành công"
                        ]);
    
                        redirect('/dashboard/news/categories');
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
    
        public function __postinforCategoryDelete(){
    
            try {
    
                $input = [
                    "news_cate_id"        => input("news_cate_id")
                ];
    
                if($input["news_cate_id"]) {
    
                    $status = DB::table("news_category")->where("news_cate_id", $input["news_cate_id"])->delete();
    
                    if($status) {
    
                        DB::table("news")->where("post_menu_id", $input["news_cate_id"])->update([
                            'post_menu_id'     => 0
                        ]);
                    }
    
                    Session::flash("res_news_info", [
                        "status"        => "200",
                        "message"       => "Xóa dữ liệu thành công"
                    ]);
    
                    return redirect('/dashboard/news/categories');
                }
    
                return redirect('error-status/500-error');
            }
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }
    
        public function __postAddinforCateForm() {
    
            try {
    
                $input = [
                    "news_cate_title"                        => !is_null(input("news_cate_title")) ? input("news_cate_title") : false, 
                ];
        
               $news_category_insert_status = DB::table("news_category")->insert([
                    "news_cate_title"                        => $input["news_cate_title"]
                ]);
    
                if($news_category_insert_status) {
    
                    Session::flash("res_news_info", [
                        "status"        => "200",
                        "message"       => "Thêm dữ liệu thành công"
                    ]);
    
                    return redirect('/dashboard/news/categories');
                }
            }
    
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }
    
        public function __getAddMenuCateForm() {
    
            try {
    
                if(!isset($this->inforCate) && !is_array($this->inforCate)) {
        
                    return redirect('error-status/500-error');
                }
        
                return view("pages/dashboard/components/plugins/news_category/add_form.view.php", [
    
                    "inforCateItem"       => $this->inforCate
                ]);
            }
            catch(Exception $error) {
    
                return redirect('error-status/500-error');
            }
        }
    
        public function __getLastRecordID() {
    
            $ID = DB::table("post")->max('post_id');
    
            if($ID) return $ID;
    
            return 0;
        }
    
    }