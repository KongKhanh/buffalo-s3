<?php

class AuthDashboardLogin {

    public function auth() {

        try {
            if(Session::has('access_token')) {

                $access_token = Crypt::decryptString(Session::get('access_token'));

                $auth = DB::table('administrator')->where('admin_phone', $access_token)->first();

                if(!$auth) {

                    return redirect('dashboard/login');
                }
            }
            else {

                return redirect('dashboard/login');
            }
        }
        catch(Exception $error) {

            return redirect('dashboard/login');
        }
    }
}