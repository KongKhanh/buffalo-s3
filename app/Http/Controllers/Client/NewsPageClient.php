<?php

class NewsPageClient {

    /**
     *   
     * @return View
     */
    public function __getNewsPageClient() {

        return view('pages/client/news.view.php');
    }

    /**
     * @param string $target
     * 
     * @return View
     */
    public function __getNewsDetailPageClient($target) {

        return view('pages/client/news_detail.view.php');
    }

    
}