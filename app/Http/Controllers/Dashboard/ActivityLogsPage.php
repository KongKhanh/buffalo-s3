<?php

class ActivityLogsPage {

    public function __getActivityLogsPage($target) {

        if($target == "admin") {

            return view('pages/dashboard/activities_logs.view.php');
        }
        elseif($target == "users") {

            return view('pages/dashboard/activities_logs.view.php');
        }
    }
}