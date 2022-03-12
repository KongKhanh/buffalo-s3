<?php 

class LevelOfTraining {

    public function __getLevelOfTrainingPage() {

        try {

            $levelOfTraining = DB::table("level_of_training")->get();

            if(!is_array($levelOfTraining)) return redirect('error-status/500-error');

            return view("pages/dashboard/leveloftraining.view.php", [

                "levelOfTraining"               => $levelOfTraining,
            ]);
        }
        catch(Exception $error) {

            return redirect('error-status/500-error');
        }
    }

    public function __getAllLevelOfTraining() {

        try {

            $levelOfTraining = DB::table("level_of_training")->get();

            for($i = 0; $i < count($levelOfTraining); $i++) {

                $levelOfTraining[$i]["majors"] = DB::table("majors")->where("mjr_lot_id",  $levelOfTraining[$i]["lot_id"])->get();
            }

            if(!is_array($levelOfTraining)) return array();

            return $levelOfTraining;
        }
        catch(Exception $error) {

            return array();
        }
    }
}