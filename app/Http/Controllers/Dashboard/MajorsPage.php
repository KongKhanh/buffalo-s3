<?php

class MajorsPage {

    public function __majorsPage() {

        try {

            $majors = DB::table('majors')->get();

            if(!$majors || !is_array($majors)) {

                return redirect('error-status/404-error');
            };

            return view('pages/dashboard/majors.view.php', [
    
                "majors"    => $majors
            ]);
        }
        catch (Exception $error) {

            return redirect('error-status/404-error');
        }
    }

    public function __getMajorsById($id) {

        try {

            $majors = DB::table('majors')->where("mjr_lot_id",$id)->get();

            if(!$majors || !is_array($majors)) {

                return false;
            };

          echo json_encode([
            "majorsById" => $majors
          ]);

        }
        catch (Exception $error) {

            return false;
        }
    }
}
