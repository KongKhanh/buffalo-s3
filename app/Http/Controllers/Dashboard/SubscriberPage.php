<?php

class SubscriberPage {


    public function __getSubscriberPage() {

        try {

            $subscribers = DB::table("subscriber")->get();

            if(isset($subscribers) && is_array($subscribers)) {

                return view('pages/dashboard/subscribers.view.php', [
                    'subscribers' => $subscribers
                ]);
            }

            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }
}