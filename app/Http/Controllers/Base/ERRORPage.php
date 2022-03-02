<?php

class ERRORPage {

    public static function __get404Page() {

        return view("pages/404_error.view.php");
    }

    public static function __get500Page() {

        return view("pages/500_error.view.php");
    }
}
