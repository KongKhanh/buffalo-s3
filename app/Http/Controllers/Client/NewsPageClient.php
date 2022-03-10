<?php

class NewsPageClient {

    protected $newsCate = [];

    function __construct() {

        $this->newsCate = DB::table("news_category")->get();
    }

    /**
     *   
     * @return View
     */
    public function __getNewsPageClient() {

        try {

            if(is_array($this->newsCate)) {

                $newsList = DB::table("news")->join("links", "news_link_id", "=", "link_id")->get();

                if($newsList && is_array($newsList)) {

                    return view('pages/client/news.view.php', [
                        "newsList"                  => $newsList,
                        "newsCate"                  => $this->newsCate,
                        "latestNews"                => $this->__getLatestNewsList(3)
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

    /**
     * @param string $target
     * 
     * @return View
     */
    public function __getNewsDetailPageClient($target) {

        try {

            if(isset($target) && is_array($this->newsCate)) {

                DB::table("news")->update([
                    "news_num_of_view" => DB::table("news")->where("news_id", $target)->value("news_num_of_view") + 1,
                ]);

                $newsItem = DB::table("news")->where("news_id", $target)->first();

                if($newsItem) {

                    return view('pages/client/news_detail.view.php', [
                        "newsItem"                  => $newsItem,
                        "newsCate"                  => $this->newsCate,
                        "latestNews"                => $this->__getLatestNewsList(3)
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

    public function __getLatestNewsList($quantity) {

        return DB::table("news")
        ->join("links", "news_link_id", "=", "link_id")
        ->get();
    }

    public function __getNewsByCate($ID) {

        try {

            if(!isset($ID)) return redirect('error-status/404-error');;

            if(is_array($this->newsCate)) {

                $newsByCate = DB::table("news")
                    ->join("links", "news_link_id", "=", "link_id")
                    ->where("news_news_cate_id", $ID)
                    ->get();

                if(is_array($newsByCate)) {

                    return view('pages/client/news_by_cate.view.php', [
                        "newsByCate"                    => $newsByCate,
                        "newsCate"                      => $this->newsCate,
                        "latestNews"                    => $this->__getLatestNewsList(3)
                    ]);
                }

                return redirect('error-status/404-error'); 
            }
            else {

                return redirect('error-status/404-error'); 
            }
        }
        catch(Exception $error) {

            return redirect('error-status/404-error');
        }
    }
}