<?php

class HomePage {

    public function __getHomePage() {

        return view('pages/client/home.view.php');
    }

    public function __getAboutPage() {

        return view('pages/client/about_us.view.php');
    }

    public function __getSubscriberForm() {

        try {

            $trainingTypeList = DB::table('level_of_training')->get();

            return view('pages/client/components/subscriber_form.view.php', [
                'trainingTypeList' => $trainingTypeList
            ]); 
        }
        catch (Exception $error) {

            return redirect('error-status/404-error');
        }
    }
}

