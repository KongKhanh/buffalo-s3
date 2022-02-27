<?php

class Login {

    public function __getAdminLogin() {

        return view('pages/dashboard/auth/login.view.php');
    }

    public function __postAdminLogin(){

        $phoneAdmin = input('admin_phone');

        $passwordAdmin = input('admin_password');

        $errors = [];

        if(preg_match('/^[0-9]{10}+$/', $phoneAdmin)){ 

            $adminPhone = $phoneAdmin;
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_phone" => "Số điện thoại không đúng định dạng"
            ]);
        }
        if(preg_match('/^[a-z0-9_-]{4,32}$/', $passwordAdmin) && is_string($passwordAdmin)){ 

            $adminPassword = $passwordAdmin;
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_password" => "Mật khẩu không đúng định dạng"
            ]);

        }

        if(isset($adminPhone) && isset($adminPassword)){

            $admin =  DB::table('administrator')
            ->where('admin_phone',$adminPhone)
            ->where('admin_password',$adminPassword)
            ->first();

            if($admin){

                Cookie::queue('access_token',$admin['admin_id'],(24*60*30));
                redirect('/dashboard/analytics');
            }
            else{

                $errors = array_merge($errors, [
                    "error_admin_login" => "Đăng nhập không thành công"
                ]);

                return view('pages/dashboard/auth/login.view.php',
                [
                    'errors' => $errors
                ]);
            }
        }
        else{

            return view('pages/dashboard/auth/login.view.php',
            [
                'errors' => $errors
            ]);
        }
        return view('pages/dashboard/auth/login.view.php');
    }
}
