<?php

class HomePage {

    public function __getHomePage() {

        try {

            $menuCategories = DB::table('menu_cate')->where('mc_parent_id',0)->get();


            for($i = 0; $i < count($menuCategories); $i++){

                $childrenCategories = DB::table('menu_cate')->where('mc_parent_id',$menuCategories[$i]['mc_id'])->get();

                    $menuCategories[$i]["childrenList"] = $childrenCategories;

                }
                
            return view('pages/client/home.view.php', [
                
                'siteInfo'                      => $this->siteInfo,
                'menuCategories'                => $menuCategories
            ]); 
        
        }
        catch (Exception $error){

            return redirect('error-status/404-error');
        }
    }

    public function __getAboutPage() {

        return view('pages/client/about_us.view.php');
    }

    public function __getSubscriberForm() {

        try {

            $trainingTypeList = DB::table('level_of_training')->get();

            return view('pages/client/components/subscriber_form.view.php', [
                'trainingTypeList' => $trainingTypeList
            ]); 
        }
        catch (Exception $error) {

            return redirect('error-status/404-error');
        }
    }
}

