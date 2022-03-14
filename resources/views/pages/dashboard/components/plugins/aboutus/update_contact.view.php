<?php

    View::__template()->__extends("layouts/dashboard/app.dashboard.view.php");

    View::__template()->__startSection("content");
?>

<script src="/public/dashboard/plugins/ckeditor/ckeditor.js"></script>


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
                        if(Session::has("res_site_contact_info")) {

                            $res_site_contact_info = Session::get("res_site_contact_info");

                            $badgeStatus = $res_site_contact_info["status"] == 200 ? 'success' : 'danger';

                            echo <<<HTML
                                <div class="alert alert-{$badgeStatus} alert-dismissible fade show" role="alert">
                                    {$res_site_contact_info["message"]}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            HTML;
                        }
                    ?>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="sic_contact" class="form-label">Nội dung liên hệ</label>
                                        <textarea type="text" name="sic_contact" class="form-control" id="contenteditor">
                                            <?= 
                                                $siteContact['sic_contact'];
                                            ?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <span class="me-2">
                                        Trạng thái: 
                                    </span>
                                    <div class="form-check form-switch">

                                        <?php 
                                        
                                            $statusActive = $siteContact["sic_status"] == "published" ? "checked" : "";
                                        ?>

                                        <input type="checkbox" class="form-check-input sic_status" data-id="" id="customSwitch_" <?= $statusActive; ?>>
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

<script>
    CKEDITOR.replace('contenteditor');
</script>

<script>
        /**
     * Task: update status of intro
     */
    $('.sic_status').change(function() {

        var endPoint = `/dashboard/about-us/contact/edit`;

        function __requestUpdate(sic_status) { 

            $.ajax({
                method: 'POST',
                url: endPoint,
                data: {
                    "sic_status": sic_status
                }
            })
            .done(function(res) {

                if(res) {

                    cuteAlert({
                        type: "success",
                        title: "Thông báo",
                        message: "Cập nhật dữ liệu thành công",
                        buttonText: "Okay"
                    });
                }
            })
            .fail(function(res) {

                console.log(res);
            });
        }

        if(this.checked) {

            __requestUpdate("published");
        }
        else {

            __requestUpdate("hidden");
        }
    });  
</script>

<?php View::__template()->__endSection(); ?>