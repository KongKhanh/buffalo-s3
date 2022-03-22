<?php

class NewsPage {

    protected $newsCate = [];

    public function __construct() {

        $this->newsCate = DB::table("news_category")->get();
    }

    public function __getNewsPage() {

        try {

            $newsList = DB::table('news')
            ->join("links", "news_link_id", "=", "link_id")
            ->get();
    
            return view("pages/dashboard/news.view.php", [
                "newsList" => $newsList
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getAddForm() {

        try {

            if(!isset($this->newsCate) && !is_array($this->newsCate)) {
    
                return redirect('error-status/500-error');
            }
    
            return view("pages/dashboard/components/plugins/news/add_form.view.php", [

                "newsCate"          => $this->newsCate,
                "lastNewsID"        => $this->__getLastRecordID()
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postAddForm() {

        try {

            $input = [
                "news_title"                        => !is_null(input("news_title")) ? input("news_title") : false, 
                "news_news_cate_id"                 => !is_null(input("news_news_cate_id")) ? input("news_news_cate_id") : false, 
                "link_url"                          => !is_null(input("link_url")) ? input("link_url") : false, 
                "news_short_content"                => !is_null(input("news_short_content")) ? input("news_short_content") : false, 
                "news_main_content"                 => !is_null(input("news_main_content")) ? input("news_main_content") : false, 
                "news_created_by"                   => "0",
                "news_representative_image"         => !is_null(input("news_representative_image")) ? input("news_representative_image") : false, 
            ];

            $link_id = DB::table("links")->insertGetId([
                "link_lt_id"                => 1, 
                "link_url"                  => $input["link_url"],  
            ]);
            
            $input["news_representative_image"] = array_merge($input["news_representative_image"], [
                'target_dir'        =>      'public/storage/images/'
            ]);

            $statusMove = SingleHelper::moveFile($input["news_representative_image"]);
    
            $link_id ? $news_insert_status = DB::table("news")->insert([
                "news_title"                            => $input["news_title"], 
                "news_news_cate_id"                     => $input["news_news_cate_id"],  
                "news_link_id"                          => $link_id,
                "news_short_content"                    => $input["news_short_content"],
                "news_main_content"                     => $input["news_main_content"], 
                "news_created_by"                       => "0",
                "news_representative_image"             => $statusMove ? "/" . $input["news_representative_image"]["target_dir"] . $input["news_representative_image"]["name"] : null,
            ]) : false;

            if($news_insert_status) {

                Session::flash("res_news_info", [
                    "status"        => "200",
                    "message"       => "Thêm dữ liệu thành công"
                ]);

                redirect('/dashboard/news');
            }
        }

        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getUpdateForm($id) {

        try {

            if($id) {

                $news = DB::table("news")->where("news_id", $id)->join("links", "news_link_id", "=", "link_id")->first();

                if(isset($news)) {

                    return view("pages/dashboard/components/plugins/news/update_form.view.php", [
                        "newsCate"          => $this->newsCate,
                        "news"              => $news
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

            if(input("news_title")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "news_title"      => trim(input("news_title"))
                ]);
            }

            if(input("news_news_cate_id")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "news_news_cate_id"      => input("news_news_cate_id")
                ]);
            }

            if(input("news_short_content")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "news_short_content"      => input("news_short_content")
                ]);
            }

            if(input("news_main_content")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "news_main_content"      => input("news_main_content")
                ]);
            }

            if(input("news_status")) {

                $dataToUpDate = array_merge($dataToUpDate, [

                    "news_status"      => input("news_status")
                ]);
            }

            if(input("news_representative_image") && !empty(input("news_representative_image")["name"])) {

                $input["news_representative_image"] = array_merge(input("news_representative_image"), [
                    'target_dir'        =>      'public/storage/images/'
                ]);

                $statusMove = SingleHelper::moveFile($input["news_representative_image"]);

                $dataToUpDate = array_merge($dataToUpDate, [

                    "news_representative_image"      => $statusMove ? "/" . $input["news_representative_image"]["target_dir"] . $input["news_representative_image"]["name"] : null,
                ]);
            }

            if(isset($id)) {

                $statusUpdate = DB::table("news")->where("news_id", $id)->update($dataToUpDate);  

                if($statusUpdate && $statusUpdate != 0) {

                    Session::flash("res_news_info", [
                        "status"        => "200",
                        "message"       => "Cập nhật dữ liệu thành công"
                    ]);
                }

                return redirect('dashboard/news');
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
                "news_id"        => input("news_id")
            ];

            if($input["news_id"]) {

                $newsItem = DB::table("news")->where("news_id", $input["news_id"])->first();

                DB::table("links")->where("link_id",$newsItem["news_link_id"])->delete();

                DB::table("news")->where("news_id", $input["news_id"])->delete();

                Session::flash("res_news_info", [
                    "status"        => "200",
                    "message"       => "Xóa dữ liệu thành công"
                ]);

                return redirect('/dashboard/news');
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
    public function __getNewsCategoryPage() {

        try {

            if(!isset($this->newsCate) && !is_array($this->newsCate)) {
    
                return redirect('error-status/500-error');
            }
    
            return view("pages/dashboard/news_cate.view.php", [

                "newsCate"              => $this->newsCate
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getNewsCategoryForm($id){

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

    public function __postNewsCategoryForm($id){

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

    public function __postNewsCategoryDelete(){

        try {

            $input = [
                "news_cate_id"        => input("news_cate_id")
            ];

            if($input["news_cate_id"]) {

                $status = DB::table("news_category")->where("news_cate_id", $input["news_cate_id"])->delete();

                if($status) {

                    DB::table("news")->where("news_news_cate_id", $input["news_cate_id"])->update([
                        'news_news_cate_id'     => 0
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

    public function __postAddNewsCateForm() {

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

            if(!isset($this->newsCate) && !is_array($this->newsCate)) {
    
                return redirect('error-status/500-error');
            }
    
            return view("pages/dashboard/components/plugins/news_category/add_form.view.php", [

                "newsCateItem"       => $this->newsCate
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getLastRecordID() {

        $ID = DB::table("news")->max('news_id');

        if($ID) return $ID;

        return 0;
    }
}