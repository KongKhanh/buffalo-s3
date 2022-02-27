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

        if(preg_match('/^[a-zA-Z ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,32}$/',$nameAdmin) && is_string($nameAdmin)){

            $adminName = $nameAdmin;
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_name" => "Tên tài khoản không đúng định dạng"
            ]);
        }

        if(preg_match('/^(0)(1|3|5|7|8|9)+([0-9]{8})$/', $phoneAdmin)){
            if(isset($phoneAdmin)){

               $selectAdmin = DB::table('administrator')
                ->where('admin_phone',$phoneAdmin)
                ->first();

                if($selectAdmin == true){

                    $errors = array_merge($errors, [
                        "error_admin_phone" => "Số điện thoại đã tồn tại"
                    ]);
                }
                else{
                    $adminPhone = $phoneAdmin;
                }
            }
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_phone" => "Số điện thoại không đúng định dạng"
            ]);
        }

        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/',$passwordAdmin)){

            $adminPassword = $passwordAdmin;
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_password" => "Mật khẩu chứa ít nhất một chữ viết thường, viết hoa và số"
            ]);
        }

        if(isset($adminName) && isset($adminPhone) && isset($adminPassword)){
            
            DB::table('administrator')
            ->insert([
                'admin_full_name' => $adminName,
                'admin_phone' => $adminPhone,
                'admin_password' => $adminPassword
            ]);
            redirect('/dashboard/analytics');
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_register" => "Đăng ký thất bại"
            ]);

            return view('pages/dashboard/auth/register.view.php',
            [
                'errors' => $errors
            ]);
        }
          return view('pages/dashboard/auth/register.view.php');
    }
}
