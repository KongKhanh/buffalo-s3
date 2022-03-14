<?php 

class ThirdToolPage {

    private $codeTool = [

        "googlemapaddress"              => "GMA001",
        "facebookchatmessenger"         => "FCM001"
    ];

    public function __getCodeTool() {

        return $this->codeTool;
    }

    public function __getGoogleMapAddress() {

        try {

            $GoogleMapAddressCode = DB::table("third_tool")->where("tt_type", $this->__getCodeTool()['googlemapaddress'])->first();

            if(isset($GoogleMapAddressCode)) {

                return view("pages/dashboard/components/plugins/third_tool/googleMap.view.php", [

                    "GoogleMapAddressCode"      => $GoogleMapAddressCode
                ]);
            }

            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getFacebookChatMessenger() {

        try {

            $FacebookChatMessengerCode = DB::table("third_tool")->where("tt_type", $this->__getCodeTool()['facebookchatmessenger'])->first();

            if(isset($FacebookChatMessengerCode)) {

                return view("pages/dashboard/components/plugins/third_tool/facebookChatMessenger.view.php", [

                    "FacebookChatMessengerCode"      => $FacebookChatMessengerCode
                ]);
            }

            return redirect('error-status/500-error');
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __postUpdateThirdToolPlugins() {

        try {

            $input = [

                'ID'            => input('tt_type') ? trim(input('tt_type')) : null,
                'tt_code'       => input('tt_code') ? trim(input('tt_code')) : null,
            ];

            if(is_null($input['ID'])) return redirect('error-status/500-error');
            
            $dataToUpdate = [
                'tt_code'       => $input['tt_code'],
            ];

            $updateFucn = function(array $dataToUpdate, string $ID) {

                DB::table("third_tool")->where("tt_type", $ID)->update($dataToUpdate);

                Session::flash("res_status", [
                    "status"        => "200",
                    "message"       => "Cập nhật dữ liệu thành công"
                ]);
            };

            switch($input['ID']) {

                case "GMA001": 
                        call_user_func_array($updateFucn, array($dataToUpdate, "GMA001")); 
                        redirect('dashboard/tool-third/google-map');
                    break;

                case "FCM001": 
                    call_user_func_array($updateFucn, array($dataToUpdate, "FCM001")); 
                    redirect('dashboard/tool-third/facebook-chat-messenger');
                break;

                default: 
                    return redirect('error-status/500-error');
            }

            
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    /**
     * @param string $type
     * @return Object
     */
    public function __getCodeByType(string $type) {

        if(empty($type)) return "";

        return DB::table("third_tool")->where("tt_type", $type)->first();
    }
}