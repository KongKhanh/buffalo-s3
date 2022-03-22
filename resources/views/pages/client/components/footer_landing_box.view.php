<?php 
    $siteInfo = (new SiteInfoAPI())->__getSiteInfomation();
?>

<div class="open-register_area">
    <div class="support-wrapper">
        <button type="button" id="register-btn" class="btn_regis_schedule btn_get_support">
            <i class="fas fa-paper-plane mr-2"></i>
            Đăng Ký Trực Tuyến
        </button>
        <button type="button" id="btn_openform_consult" class="btn_get_support">
            <i class="fas fa-headset"></i>
            Đăng Ký Tư Vấn
        </button>
        <button type="button" class="btn_regis_schedule btn_get_support">
            <i class="fas fa-phone-volume"></i>
            Hotline: 
            <?php 

                if($siteInfo["sitePhone"][2]) {

                    echo $siteInfo["sitePhone"][2]['sip_phone'];
                }
            ?>
        </button>
    </div>
</div>

<script src="/public/client/assets/js/registerModal.js"></script>