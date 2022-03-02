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
}
