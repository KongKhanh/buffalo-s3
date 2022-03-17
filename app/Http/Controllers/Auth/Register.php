<?php

class Register {

    public function __getAdminRegister() {

        return view('pages/dashboard/auth/register.view.php');
    }

    public function __postAdminRegister(){

        $errors = [];
        $nameAdmin = input('admin_name');
        $phoneAdmin = input('admin_phone');
        $passwordAdmin = input('admin_password');
        $adminAuthCode = input('auth_code');

        if($adminAuthCode != "ats123456"){
            $errors = array_merge($errors, [
                "error_auth_code" => "Auth Code không hợp lệ"
            ]);
        }
        if(!preg_match('/^[a-zA-Z ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,32}$/',$nameAdmin)){

            $errors = array_merge($errors, [
                "error_admin_name" => "Tên tài khoản không đúng định dạng"
            ]);
        }
        if(preg_match('/^(0)(1|3|5|7|8|9)+([0-9]{8})$/', $phoneAdmin)){
            if(isset($phoneAdmin)){

               $selectAdmin = DB::table('administrator')
                ->where('admin_phone',$phoneAdmin)
                ->first();

                if($selectAdmin){

                    $errors = array_merge($errors, [
                        "error_admin_phone" => "Số điện thoại đã tồn tại"
                    ]);
                }
            }
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_phone" => "Số điện thoại không đúng định dạng"
            ]);
        }

        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/',$passwordAdmin)){

            $errors = array_merge($errors, [
                "error_admin_password" => "Mật khẩu chứa ít nhất một chữ viết thường, viết hoa và số"
            ]);
        }

        if(count($errors) == 0){
            
            DB::table('administrator')
            ->insert([
                'admin_full_name' => $nameAdmin,
                'admin_phone' => $phoneAdmin,
                'admin_password' => Crypt::encryptString($passwordAdmin)
            ]);
            $message = "Đăng ký thành công";
            return view('pages/dashboard/auth/login.view.php',
            [
                'message' => $message
            ]);

        }
        else{
            return view('pages/dashboard/auth/register.view.php',
            [
                'errors' => $errors
            ]);
        }
    }
}
