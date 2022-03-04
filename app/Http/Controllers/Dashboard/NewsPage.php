<?php

class NewsPage {

    public function __getNewsPage() {

        $newsList = DB::table('news')->get();

        return view("pages/dashboard/news.view.php", [
            "newsList" => $newsList
        ]);
    }

    public function __getAddForm() {

        return view("pages/dashboard/components/plugins/news/add_form.view.php");
    }
}