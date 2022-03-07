<?php

class SubscriberPage {


    public function __getSubscriberPage() {

        return view('pages/dashboard/subscribers.view.php');
    }

    public function __postSubscriberPage(){

        $substrDOB = input("subscriber_dob");
        $errors = [];

        if(preg_match('/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/((19|20)\d\d)/',$substrDOB)){
           
            $date=date_create();
            date_date_set($date,substr($substrDOB,6,4),substr($substrDOB,3,2),substr($substrDOB,0,2));
            $substrDOB = date_format($date,"Y-m-d");
        }
        else if(preg_match('/^(19|20)\d\d([-])(0[1-9]|1[012])\2(0[1-9]|[12][0-9]|3[01])/',$substrDOB)){
            
            $substrDOB = $substrDOB;
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_dob" => "Ngày sinh không hợp lệ"
            ]);
        }

        $input = [

            "subscriber_name"       => input("subscriber_name"),
            "subscriber_mjr_id"     => input("subscriber_mjr_id"),
            "subscriber_lot_id"     => input("subscriber_lot_id"),
            "subscriber_phone"      => input("subscriber_phone"),
            "subscriber_email"      => input("subscriber_email"),
            "subscriber_address"    => input("subscriber_address"),
            "subscriber_dob"        => $substrDOB
        ];

        if(!isset($input['subscriber_mjr_id'])){

            $errors = array_merge($errors, [
                "error_admin_mjr" => "Chưa chọn hệ đào tạo"
            ]);
        }

        if(!isset($input['subscriber_lot_id'])){

            $errors = array_merge($errors, [
                "error_admin_lot" => "Chưa chọn ngành đào tạo"
            ]);
        }

        if(!preg_match('/^[a-zA-Z ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{10,32}$/',$input['subscriber_name'])){

            $errors = array_merge($errors, [
                "error_admin_name" => "Tên tài khoản không đúng định dạng"
            ]);
        }

        if(!preg_match('/^(0)(1|3|5|7|8|9)+([0-9]{8})$/', $input['subscriber_phone'])){

            $errors = array_merge($errors, [
                "error_admin_phone" => "Số điện thoại không hợp lệ"
            ]);
        }

        if(!preg_match('/^[\w\.]+@([\w]+\.)+[\w]{2,4}$/', $input['subscriber_email'])){

            $errors = array_merge($errors, [
                "error_admin_email" => "Email không đúng định dạng"
            ]);
        }

        if(!preg_match('/^[A-Za-z0-9\/\s\,ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{10,100}$/',$input['subscriber_address'])){

            $errors = array_merge($errors, [
                "error_admin_address" => "Address không đúng định dạng"
            ]);
        }

        if(count($errors) == 0){

            DB::table('subscriber')->insert($input);
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_subscriber" => "Đăng ký không thành công"
            ]);

            $trainingTypeList = DB::table('level_of_training')->get();

            return view('pages/client/components/subscriber_form.view.php', [
                "errors" => $errors,
                'trainingTypeList' => $trainingTypeList
            ]);
        }
        
        return view('pages/dashboard/subscribers.view.php');
    }
}