<?php

    View::__template()->__extends("layouts/dashboard/app.dashboard.view.php");

    View::__template()->__startSection("content");
?>

<!-- Start Content-->
<div class="container-fluid">

    <!-- Form row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">FORM NỘI DUNG</h4>
                    <p class="text-muted font-14"></p>
                    <ul class="nav nav-tabs nav-bordered mb-3"></ul> <!-- end nav-->
                    <?php 
                        if(Session::has("res_status")) {

                            $res_status = Session::get("res_status");

                            $badgeStatus = $res_status["status"] == 200 ? 'success' : 'danger';

                            echo <<<HTML
                                <div class="alert alert-{$badgeStatus} alert-dismissible fade show" role="alert">
                                    {$res_status["message"]}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            HTML;
                        }
                    ?>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="/dashboard/tool-third/update/by-switch-case">

                                <input type="hidden" value="<?= $GoogleMapAddressCode['tt_type']; ?>" name="tt_type">

                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="tt_code" class="form-label">Code embed - <?= $GoogleMapAddressCode['tt_title']; ?></label>
                                        <textarea 
                                            type="text" 
                                            name="tt_code" 
                                            class="form-control" 
                                            id="contenteditor" 
                                            rows="15"
                                        >
                                            <?= 
                                                $GoogleMapAddressCode['tt_code'];
                                            ?>
                                        </textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">CẬP NHẬT</button>
                            </form>                      
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    
</div> 
<!-- container -->


<!-- bundle -->
<script src="/public/dashboard/assets/js/vendor.min.js"></script>
<script src="/public/dashboard/assets/js/app.min.js"></script>

<?php View::__template()->__endSection(); ?>