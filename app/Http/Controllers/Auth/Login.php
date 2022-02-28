<?php

class Login {

    public function __getAdminLogin() {

        return view('pages/dashboard/auth/login.view.php');
    }

    public function __postAdminLogin(){

        $phoneAdmin = input('admin_phone');

        $passwordAdmin = input('admin_password');

        $errors = [];

        if(!preg_match('/^(0)(1|3|5|7|8|9)+([0-9]{8})$/', $phoneAdmin)){ 

            $errors = array_merge($errors, [
                "error_admin_phone" => "Số điện thoại không đúng định dạng"
            ]);
        }

        if(!preg_match('/^[a-z0-9_-]{4,32}$/', $passwordAdmin) && is_string($passwordAdmin)){ 

            $errors = array_merge($errors, [
                "error_admin_password" => "Mật khẩu không đúng định dạng"
            ]);
        }
        if(count($errors) == 0){

            $admin =  DB::table('administrator')
            ->where('admin_phone',$phoneAdmin)
            ->where('admin_password',$passwordAdmin)
            ->first();

            if($admin){

                Session::set('access_token',$admin['admin_id']);
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
    }
}
