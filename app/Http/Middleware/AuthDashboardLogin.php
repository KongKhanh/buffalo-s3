<?php

class AuthDashboardLogin {

    /**
     * @return boolean
     */
    public function auth() {

        try {

            if(Session::has('access_token')) {

                $access_token = Crypt::decryptString(Session::get('access_token'));

                $auth = DB::table('administrator')->where('admin_phone', $access_token)->first();

                if(!$auth) {

                    return false;
                }

                return true;
            }
            else {

                return false;
            }
        }
        catch(Exception $error) {

            return false;
        }
    }
}