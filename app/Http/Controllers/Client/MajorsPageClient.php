<?php 

class MajorPageClient {

    private $siteInfo;

    function __construct() {

        $this->siteInfo = (new SiteInfoAPI())->__getSiteInfomation();
    }

    public function __getAllMajorsPage() {

        return view("pages/client/majors.view.php", [

            'majors'                    => $this->__getAllMajors(),
            'siteInfo'                  => $this->siteInfo,
        ]);
    }

    /**
     * LOT (level-of-training)
     */
    public function __getMajorsByLOT($ID) {

        try {

            if(is_null($ID)) return redirect('error-status/404-error');

            /**
             * Parsing ID
             */
            $ID = explode('-', $ID)[count(explode('-', $ID)) - 1];

            $majorsByLOT = DB::table("majors")->where("mjr_lot_id", $ID)->get();

            if(!$majorsByLOT) return redirect('error-status/404-error');

            return view("pages/client/majors.view.php", [

                'majors'                    => $majorsByLOT,
                'siteInfo'                  => $this->siteInfo,
            ]);
        }

        catch(Exception $error) {

            return redirect('error-status/404-error');
        }
    }

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