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
                            <form method="POST" action="" enctype="multipart/form-data">
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

                                 <!--Logo area-->
                                 
                                 <div class="row g-2 mb-3 p-2">  
                                    <label for="" class="form-label mt-0 p-0">Logo thương hiệu</label> 
                                    <div class="row border p-2">
                                        <div class="col-md-3">
                                            <div>
                                                <img src="<?= $siteInfo['site_info_main_logo']; ?>" width="100%" id="site_info_main_logo_img">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex align-item-end">
                                            <div>
                                                
                                                <style>
                                                    .btnChangeLogo {
                                                        padding: 6px;
                                                        border-radius: 4px;
                                                        border: 1px solid #7f8c8d;
                                                        cursor: pointer;
                                                        position: absolute;
                                                        bottom: 0;
                                                        width: 84px;
                                                        text-align: center;
                                                    }
                                                    .btnChangeLogo:hover {
                                                        text-decoration: underline;
                                                    }
                                                    .btnChangeLogo ~ .cancel {

                                                        margin-left: 100px;
                                                    }
                                                </style>

                                                <div class="position-relative h-100 w-100 d-flex align-item-center">
                                                    <label for="site_info_main_logo" class="btnChangeLogo">Thay đổi</label>
                                                    <button type="button" id="btnCancelUpdateLogo" class="d-none btnChangeLogo cancel">Hủy</button>
                                                </div>

                                                <input id="site_info_main_logo" name="site_info_main_logo" type="file" style="display: none;" data-url-logo="<?= $siteInfo['site_info_main_logo']; ?>">
                                            </div>
                                        </div>
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

<script>
    
    var urlLogoOrigin = '';

    $('#site_info_main_logo') && $('#site_info_main_logo').change(function(event) {

        const [file] = event.target.files;

        urlLogoOrigin = $(this).attr('data-url-logo');

       if($('#site_info_main_logo_img')) {

            document.querySelector('#site_info_main_logo_img').src = URL.createObjectURL(file); 

            $('#btnCancelUpdateLogo').removeClass('d-none');
       }
    });

    $('#btnCancelUpdateLogo') && $('#btnCancelUpdateLogo').click(function() {

        $('#site_info_main_logo_img').attr('src', urlLogoOrigin);

        $('#btnCancelUpdateLogo').addClass('d-none');
    });
</script>

<?php View::__template()->__endSection(); ?>