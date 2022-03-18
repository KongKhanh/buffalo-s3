<?php 

    $siteInfo = (new SiteInfoAPI())->__getSiteInfomation();
?>

<footer class="main-footer--outter">
    <section class="container">
        <section class="contacts-box content-box">
            <section class="contacts-box__header">
                <ul class="contacts-box__list">
                    <li class="contacts-box__list--item">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li class="contacts-box__list--item"><a href="#"><i
                                class="fab fa-facebook-messenger"></i></a></li>
                    <li class="contacts-box__list--item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <h2 class="contacts-box__title">
                    liên hệ
                </h2>
            </section>
            <section class="contacts-box__body">
                <article class="contact-box">
                    <div class="contact-box--icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-box-desc">
                        <p style="margin: 0;">

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
                            
                        </p>
                    </div>
                </article>
                <article class="contact-box">
                    <div class="contact-box--icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-box-desc">
                        <p style="margin: 0;">
                            <?php 
                                $stopPoint = 0;

                                $breakLine = "-";

                                foreach ($siteInfo["siteEmail"] as $email) {

                                    $stopPoint++;

                                    if($stopPoint >= (count($siteInfo["siteEmail"]))){

                                        $breakLine = "";
                                    };

                                    echo <<<HTML
                                        {$email['sie_email']} {$breakLine}
                                    HTML;
                                }
                            ?>
                        </p>
                    </div>
                </article>
                <article class="contact-box">
                    <div class="contact-box--icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <div class="contact-box--desc">
                        <?php 
                            foreach ($siteInfo["siteAddress"] as $address) {
                                echo <<<HTML
                                        <p>{$address['sia_address']}</p>
                                HTML;
                            }
                        ?>
                        <p class="contact-box--detail">
                            Liên kết tại Bình Chánh: Trung tâm Giáo dục nghề nghiệp - Giáo dục thường xuyên
                            (GDNN-GDTX) huyện Bình Chánh (Số 4 Đường số 6 Khu hành chính huyện, Thị trấn Tân
                            Túc, Huyện Bình Chánh).
                        </p>
                        <p class="contact-box--detail">
                            Liên kết tại Q.12: Trường Trung Cấp Kinh Tế Kỹ Thuật Quận 12 (592 Nguyễn Ảnh Thủ,
                            Phường Trung Mỹ Tây, Quận 12).
                        </p>
                    </div>
                </article>
            </section>
        </section>
    </section>
    <section class="main-footer--inner">
        <article class="main-footer__content">
            <section class="main-footer__logo">
                <img src="/public/client/assets/images/ats-logo-2.png" alt="">
            </section>
            <section class="main-footer__track">
                <article class="main-footer__track-item">
                    <p>Lượt truy cập</p>
                    <p><span id="access-time"><?= number_format($siteInfo["site_info_noa"]); ?></span> lượt</p>
                </article>
                <article class="main-footer__track-item">
                    <p>Đang online</p>
                    <p><span id="online">123</span> nguời</p>
                </article>
            </section>
        </article>
        <article class="main-footer__desc">
            <p><?= $siteInfo['site_info_name']; ?></p>
            <p>Designed by &#169; ProQ - Email: proq@gmail.com</p>
        </article>
    </section>
</footer>