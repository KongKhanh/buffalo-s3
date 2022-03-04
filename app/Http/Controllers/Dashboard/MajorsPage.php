<?php

class MajorsPage {

    public function __majorsPage() {

        try {

            $majors = DB::table('majors')
                ->join("level_of_training", "majors.mjr_lot_id", "=", "level_of_training.lot_id")
                ->get();

            if(!$majors || !is_array($majors)) {

                return redirect('error-status/500-error');
            };

            return view('pages/dashboard/majors.view.php', [
    
                "majors"    => $majors
            ]);
        }
        catch (Exception $error) {

            return redirect('error-status/500-error');
        }
    }
}
