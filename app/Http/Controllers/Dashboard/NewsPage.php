<?php

class NewsPage {

    public function __getNewsPage() {

        return view("pages/dashboard/news.view.php");
    }

    public function __getAddForm() {

        return view("pages/dashboard/components/plugins/news/add_form.view.php");
    }
}