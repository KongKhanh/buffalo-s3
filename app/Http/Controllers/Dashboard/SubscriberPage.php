<?php

class SubscriberPage {

    public function __construct() {

        
    }

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
            "subscriber_dob"        => $substrDOB,
            "subscriber_note"       => input("subscriber_note")
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

        if(!preg_match('/^[a-zA-Z ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,32}$/',$input['subscriber_name'])){

            $errors = array_merge($errors, [
                "error_admin_name" => "Họ và tên đúng định dạng"
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
                "error_admin_address" => "Địa chỉ không đúng định dạng"
            ]);
        }

        if(count($errors) == 0){

            DB::table('subscriber')->insert($input);

            Session::flash("status_subscriber", [
                "status" => 1997
            ]);
        }
        else{

            $errors = array_merge($errors, [
                "error_admin_subscriber" => "Đăng ký không thành công"
            ]);
            if(input("errors_landing")){

                Session::flash("res_errors_landing", [
                    "errors" => $errors,
                ]);
            }
            else{

                Session::flash("res_subscriber", [
                    "errors" => $errors,
                ]);
            }
        }
        
        return redirect('/'); 
    }


    public function __getUpdateForm($id) {

        try {

            if(isset($id)) {

                $subscriberItem = DB::table("subscriber")->where("subscriber_id", $id)
                ->first();

                $mjrItems = DB::table("majors")->get();
                $lotItems = DB::table("level_of_training")->get();


                if($subscriberItem) {

                    return view("pages/dashboard/components/plugins/subscriber/update_form.view.php", [

                        "subscriberItem"        => $subscriberItem,
                        "mjrItems"               => $mjrItems,
                        "lotItems"               => $lotItems
                    ]);
                }

                return redirect('error-status/404-error'); 
            }
            else {

                return redirect('error-status/500-error'); 
            }
        }
        catch(Exception $error) {

            return redirect('error-status/500-error'); 
        }
    }
    public function __postUpdate($id) {

        try {

            if($id){

                $subscriber_status = [
                    "subscriber_status" => input('subscriber_status')
                ];

                $subscriber_item = [
                    "subscriber_name"       => input('subscriber_name'),
                    "subscriber_phone"      => input('subscriber_phone'),
                    "subscriber_address"    => input('subscriber_address'),
                    "subscriber_email"      => input('subscriber_email'),
                    "subscriber_lot_id"     => input('subscriber_lot_id'),
                    "subscriber_mjr_id"     => input('subscriber_mjr_id')
                ];

                if($subscriber_status || is_array($subscriber_status)){

                    $subscriberStatusUpdate = DB::table('subscriber')->where("subscriber_id", $id)->update($subscriber_status);

                    if($subscriberStatusUpdate && $subscriberStatusUpdate != 0) {
        
                        Session::flash("res_subscriber_infor", [
                            "status"        => "200",
                            "message"       => "Cập nhật dữ liệu thành công"
                        ]);

                        redirect('dashboard/subscribers');
                    };
                }

                if($subscriber_item || is_array($subscriber_item)){

                    $subscriberItemUpdate = DB::table('subscriber')->where("subscriber_id", $id)->update($subscriber_item);

                    if($subscriberItemUpdate && $subscriberItemUpdate != 0){
        
                        Session::flash("res_subscriber_infor", [
                            "status"        => "200",
                            "message"       => "Cập nhật dữ liệu thành công"
                        ]);

                        redirect('dashboard/subscribers');
                    };
                }
            }
             redirect('dashboard/subscribers');
        }
        catch (Exception $error) {

            return false;
        }
    }

    public function __deleteSubscriber(){

        try {

            $input = [
                "scb_id"    => input("scb_id")
            ];

            if($input){

               $status = DB::table('subscriber')->where('subscriber_id',$input['scb_id'])->delete();
    
                Session::flash("res_subscriber_infor", [
                    "status"        => "200",
                    "message"       => "Cập nhật dữ liệu thành công"
                ]);

                redirect('dashboard/subscribers');
            }
            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }
}