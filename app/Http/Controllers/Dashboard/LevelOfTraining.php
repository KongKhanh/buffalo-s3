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
}