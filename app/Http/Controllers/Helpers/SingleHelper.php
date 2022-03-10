<?php 

class SingleHelper {

    /**
     * @param array $target_info
     * @return boolean
     */
    public static function moveFile($target_info){

        if(count($target_info) > 0) {

            $target_dir = $target_info['target_dir'];

            $target_file = $target_dir . basename($target_info['name']);

            $uploadStatus = true;

            if ($uploadStatus == false) {

                return false;
            } 
            else {

                if (move_uploaded_file($target_info['tmp_name'], $target_file)) {

                    return true;
                } 
                else {

                    return false;
                }
            }
        }
        else {

            return false;
        }
    }
}