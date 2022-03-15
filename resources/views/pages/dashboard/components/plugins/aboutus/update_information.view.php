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
                    <p class="text-muted font-14">
                        <!-- By adding <code>.row</code> & <code>.g-2</code>, you can have control over the gutter width in as well the inline as block direction. -->
                    </p>

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
                            <form method="POST" action="">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="site_info_name" class="form-label">Tên trường học</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="site_info_name" 
                                            id="site_info_name" 
                                            placeholder="Nhập tên trường học"
                                            value="<?= $siteInfo['site_info_name']; ?>"
                                        >
                                    </div>
                                    
                                    <!--Phone area-->
                                    <?php 
                                        foreach($siteInfo['sitePhone'] as $sitePhone) {

                                            echo <<<HTML
                                                <div class="mb-3 col-md-6">
                                                    <label for="sip_phone_{$sitePhone['sip_id']}" class="form-label">Số điện thoại liên hệ</label>
                                                    <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        name="sip_phone_{$sitePhone['sip_id']}" 
                                                        id="sip_phone_{$sitePhone['sip_id']}" 
                                                        placeholder="Nhập số điện thoại"
                                                        value="{$sitePhone['sip_phone']}"
                                                    >
                                                </div>
                                            HTML;
                                        }
                                    ?>

                                    <!--Email area-->
                                    <?php 
                                        foreach($siteInfo['siteEmail'] as $siteEmail) {

                                            echo <<<HTML
                                                <div class="mb-3 col-md-6">
                                                    <label for="sie_email_{$siteEmail['sie_id']}" class="form-label">Địa chỉ Email</label>
                                                    <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        name="sie_email_{$siteEmail['sie_id']}" 
                                                        id="sie_email_{$siteEmail['sie_id']}" 
                                                        placeholder="Nhập địa chỉ Email"
                                                        value="{$siteEmail['sie_email']}"
                                                    >
                                                </div>
                                            HTML;
                                        }
                                    ?>

                                    <!--Address area-->
                                    <?php 
                                        foreach($siteInfo['siteAddress'] as $siteAddress) {

                                            echo <<<HTML
                                                <div class="mb-3 col-md-6">
                                                    <label for="sia_address_{$siteAddress['sia_id']}" class="form-label">Địa chỉ cơ sở</label>
                                                    <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        name="sia_address_{$siteAddress['sia_id']}" 
                                                        id="sia_address_{$siteAddress['sia_id']}" 
                                                        placeholder="Nhập địa chỉ cơ sở"
                                                        value="{$siteAddress['sia_address']}"
                                                    >
                                                </div>
                                            HTML;
                                        }
                                    ?>

                                </div>

                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="site_info_short_description" class="form-label">Mô tả ngắn</label>
                                        <textarea type="text" name="site_info_short_description" class="form-control" rows="5">
                                            <?= 
                                                $siteInfo['site_info_short_description'];
                                            ?>
                                        </textarea>
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn btn-warning">CẬP NHẬT</button>
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