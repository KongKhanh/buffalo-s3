<?php

class NewsPage {

    public function __getNewsPage() {

        return view("pages/dashboard/news.view.php");
    }

    public function __getAddForm() {

        try {

            $newsCate = DB::table("news_category")->get();

            if(!isset($newsCate) && !is_array($newsCate)) {
    
                return redirect('error-status/500-error');
            }
    
            return view("pages/dashboard/components/plugins/news/add_form.view.php", compact("newsCate"));
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postAddForm() {

        try {

            $input = [
                "news_title"                => !is_null(input("news_title")) ? input("news_title") : false, 
                "news_news_cate_id"         => !is_null(input("news_news_cate_id")) ? input("news_news_cate_id") : false, 
                "link_url"                  => !is_null(input("link_url")) ? input("link_url") : false, 
                "news_main_content"         => !is_null(input("news_main_content")) ? input("news_main_content") : false, 
                "news_created_by"           => "0"
            ];

            $link_id = DB::table("links")->insertGetId([
                "link_lt_id"                => 0, 
                "link_url"                  => $input["link_url"],  
            ]);
    
            $link_id ? $news_insert_status = DB::table("news")->insert([
                "news_title"                => $input["news_title"], 
                "news_news_cate_id"         => $input["news_news_cate_id"],  
                "news_link_id"              => $link_id,
                "news_main_content"         => $input["news_main_content"], 
                "news_created_by"           => "0"
            ]) : false;

            if($news_insert_status) {

                Session::flash("insert_news_info", [
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
}