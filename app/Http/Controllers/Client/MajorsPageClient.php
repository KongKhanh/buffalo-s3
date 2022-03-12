<?php 

class MajorPageClient {

    public function __getReviewMajorsByID($ID = null) {

        try {

            if(is_null($ID)) return redirect('error-status/404-error');

            /**
             * Parsing ID
             */
            $ID = explode('-', $ID)[count(explode('-', $ID)) - 1];

            $MajorItem = DB::table("majors")->where("mjr_id", $ID)->first();

            if(!$MajorItem) return redirect('error-status/404-error');

            return view("pages/client/major_review.view.php", [
                "MajorItem"             => $MajorItem
            ]);
        }

        catch(Exception $error) {

            return redirect('error-status/404-error');
        }
    }

    /**
     * @return array
     */
    public function __getAllMajors() {

        try {

            return DB::table("majors")->get();
        }
        catch(Exception $error) {

            return false;
        }
    }
}