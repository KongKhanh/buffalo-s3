<?php

class HomePage {

    public function __getHomePage() {

        return view('pages/client/home.view.php');
    }

    public function __getAboutPage() {

        return view('pages/client/about_us.view.php');
    }
}

