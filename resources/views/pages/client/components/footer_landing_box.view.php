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
                    $stopPoint = 0;

                    $breakLine = "-";

                    foreach ($siteInfo["sitePhone"] as $phone) {

                        $stopPoint++;

                        if($stopPoint >= (count($siteInfo["sitePhone"]))){

                            $breakLine = "";
                        };

                        echo <<<HTML
                            {$phone['sip_phone']} {$breakLine}
                        HTML;
                    }
                ?>
        </button>
    </div>
</div>

<script src="/public/client/assets/js/registerModal.js"></script>