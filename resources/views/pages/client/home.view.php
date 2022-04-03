<?php 
    $allAdsSlide = (new AdsSlide())->__getAllAdsSlideByStatus();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATS-Trang chủ</title>
    
    <link rel="stylesheet" href="/public/client/assets/css/style.css">
    <link rel="stylesheet" href="/public/client/assets/css/override-convert-app.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- JQuery -->
    <script src="/public/client/assets/lib/jquery-3.4.1.min.js"></script>
</head>

<style>
    .home-wrapper-news-content {
        display: flex;
        flex-direction: column;
    }
    .home-wrapper-news-content > .home-news-created-at {
        font-size: 11px;
        margin-top: 6px;
    }
    .home-wrapper-news-content > .home-news-created-at > .home-news-view-number {
        margin-left: 6px;
    }

    
</style>

<style>
    .main-header--outter {
        background-image: linear-gradient(rgba(121, 134, 150, 0.7), rgba(121, 134, 150, 0.7)), url("<?= $bgUI['headerBG']['suib_img']; ?>");
    }
    .main-footer--outter {
        background-image: linear-gradient(rgba(75, 75, 75, 0.5), rgba(75, 75, 75, 0.5)), url("<?= $bgUI['footerBG']['suib_img']; ?>");
    }
</style>

<body>
            
    <?php includeFile('pages/client/components/theme-loader.view.php');?>

    <main class="main-wrapper">
        <header class="main-header--outter">

            <!--Navbar Header-->

            <?php includeFile('pages/client/components/navbar_header.view.php');?>

            <section class="main-header__container">

                <section class="main-header__desc">
                    <div class="header__desc-wrapper">
                        <h1 class="desc__title">
                            Trung cấp Kỹ thuật Nông nghiệp Thành phố Hồ Chí Minh
                        </h1>
                        <p class="desc__detail">
                            <?= $siteInfo['site_info_short_description']; ?>
                        </p>
                        <div class="desc__research--btn">
                            <a class="btn" href="/about-us" style="margin-left: 0;">Tìm hiểu</a>
                        </div>
                    </div>
                </section>

                <section class="main-header__desc">
                    <div class="header__desc-wrapper desc-slider">
                        <button class="desc-slide__btn" id="desc-slide__btn-left">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="desc-slide__list" id="desc-slider">
                            <?php 
                                if(is_array($allAdsSlide)) {

                                    foreach($allAdsSlide as $slide) {
  
                                        echo <<<HTML
                                            <a href="{$slide['ads_slide_link_to']}" class="desc-slide__item">
                                                <img src="{$slide['ads_slide_img_link']}" class="desc-slide__item-thumbnail" style="height: 100%;"/>     
                                                <p class="desc-slide__item-title">{$slide['ads_slide_title']}</p>
                                            </a>
                                        HTML;
                                    }
                                }
                            ?>
                        </div>
                        <button class="desc-slide__btn" id="desc-slide__btn-right">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </section>

            </section>
            
        </header>

        <!--Navbar Header-->
        <?php includeFile('pages/client/components/navbar_header-mobile.view.php');?>

        <section class="body-container container">
            
            <section class="majors-box content">
                <!-- #region News -->
                <section class="majors-box__content-wrapper">
                    <h2 class="majors-box__title">
                        các ngành đào tạo <br>
                        <span>
                            <?= 
                                date("Y");
                            ?>
                        </span>
                    </h2>
                    <div class="majors-box__content">
                        <ol class="majors-box__list">
                            <div>
                                <?php 
                                    if(Session::has("res_errors_landing")) {

                                        $res_errors_landing = Session::get("res_errors_landing");
                                    }
                                    if(Session::has("status_subscriber")) {

                                        $status_scb = Session::get("status_subscriber");

                                        $statusActive = $status_scb['status'] ? $status_scb['status'] : 0;

                                        echo <<<HTML
                                            <input type="hidden" class="status_scb" value="$statusActive">
                                        HTML;
                                    }
                                    
                                    $majorsLeft = [];
                                    $majorsRight = [];
                                    $startRightIndex = [
                                        "status"    => true,
                                        "value"     => 1,
                                    ];

                                    for($i = 0; $i < count($allMajors); $i++) {

                                        if($i < ceil(count($allMajors) / 2)) {

                                            array_push($majorsLeft, $allMajors[$i]);
                                        }
                                        else {

                                            if($startRightIndex['status']) {

                                                $startRightIndex['status'] = false;
                                                $startRightIndex['value'] = $i + 1;
                                            }

                                            array_push($majorsRight, $allMajors[$i]);
                                        }
                                    }

                                    foreach($majorsLeft as $majorsItem) {
                                        
                                        $majorsItemNameSlug = Str::slug($majorsItem['mjr_name']);

                                        echo <<<HTML
                                            <li class="majors-box__list--item"><a href="/majors/review/{$majorsItemNameSlug}-{$majorsItem['mjr_id']}">{$majorsItem['mjr_name']}</a></li>
                                        HTML;
                                    }
                                ?>
                            </div>
                            <!-- <div class="img-box">
                                <img src="/public/client/assets/images/image-4.jpeg" alt="" class="majors-box_thumbnail-1">
                                <img src="/public/client/assets/images/image-5.jpeg" alt="" class="majors-box_thumbnail-2">
                            </div> -->
                        </ol>
                        <ol class="majors-box__list" start="<?= $startRightIndex['value']; ?>">
                            <div>
                                <?php 
                                    foreach($majorsRight as $majorsItem) {
                                        
                                        $majorsItemNameSlug = Str::slug($majorsItem['mjr_name']);

                                        echo <<<HTML
                                            <li class="majors-box__list--item"><a href="/majors/review/{$majorsItemNameSlug}-{$majorsItem['mjr_id']}">{$majorsItem['mjr_name']}</a></li>
                                        HTML;
                                    }
                                ?>
                            </div>
                        </ol>
                    </div>
                </section>

                <div class="form_wrapper">
                    <div class="form_container">
                        <div class="title_container">
                        <h2>ĐĂNG KÝ ONLINE</h2>
                        </div>
                        <div class="row clearfix">
                        <div class="">
                            <form action="/subscriber-form" id="registerForm" method="POST">
                                <input type="hidden" name="errors_landing" value="landing">
                                <div class="input_field"> <span><i class="fas fa-info"></i></span>
                                <input type="text" name="subscriber_name" id="fullName" placeholder="Họ và tên...">
                                <?php 
                                    if(isset($res_errors_landing["errors"]['error_admin_name'])){
                                        echo <<<HTML
                                            <i class="fas fa-exclamation-circle" style="color: red;">
                                            <span class="text-danger" style="color: red; width:100%;font-size:12px;">{$res_errors_landing["errors"]['error_admin_name']}</span>
                                            </i>
                                        HTML;
                                    }
                                ?>
                                </div>
                                <div class="input_field"> <span><i class="fas fa-birthday-cake"></i></span>
                                <input  type="date" style="width: 100%; padding: 8px 10px 9px 35px; height: 35px; border: 1px solid #cccccc; box-sizing: border-box; outline: none; -webkit-transition: all 0.3s ease-in-out; -moz-transition: all 0.3s ease-in-out; -ms-transition: all 0.3s ease-in-out;" name="subscriber_dob" id="dateOfBirth" placeholder="Nhập ngày tháng năm sinh">
                                <?php 
                                    if(isset($res_errors_landing["errors"]['error_admin_dob'])){
                                        echo <<<HTML
                                            <i class="fas fa-exclamation-circle" style="color: red;">
                                            <span class="text-danger" style="color: red; width:100%;font-size:12px;">{$res_errors_landing["errors"]['error_admin_dob']}</span></i>
                                        HTML;
                                    }
                                ?>
                                </div>
                                <div class="input_field"> <span><i class="fas fa-phone-alt"></i></span>
                                <input type="text" name="subscriber_phone" id="phoneNumber" placeholder="Số điện thoại...">
                                <?php 
                                    if(isset($res_errors_landing["errors"]['error_admin_phone'])){
                                        echo <<<HTML
                                            <i class="fas fa-exclamation-circle" style="color: red;">
                                            <span class="text-danger" style="color: red; width:100%;font-size:12px;">{$res_errors_landing["errors"]['error_admin_phone']}</span>
                                            </i>
                                        HTML;
                                    }
                                ?>
                                </div>
                                <div class="input_field"> <span><i class="far fa-envelope"></i></span>
                                <input type="text" name="subscriber_email" id="email" placeholder="Email...">
                                <?php 
                                    if(isset($res_errors_landing["errors"]['error_admin_email'])){
                                        echo <<<HTML
                                            <i class="fas fa-exclamation-circle" style="color: red;">
                                            <span class="text-danger" style="color: red; width:100%;font-size:12px;">{$res_errors_landing["errors"]['error_admin_email']}</span>
                                            </i>
                                        HTML;
                                    }
                                ?>
                                </div>
                                <div class="input_field"> <span><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" name="subscriber_address" id="address" placeholder="Địa chỉ liên hệ...">
                                <?php 
                                    if(isset($res_errors_landing['errors']['error_admin_address'])){
                                        echo <<<HTML
                                            <i class="fas fa-exclamation-circle" style="color: red;">
                                            <span class="text-danger" style="color: red; width:100%;font-size:12px;">{$res_errors_landing['errors']['error_admin_address']}</span>
                                            </i>
                                        HTML;
                                    }
                                ?>
                                </div>
                                <!-- <div class="row clearfix">
                                    <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="name" placeholder="First Name" />
                                    </div>
                                    </div>
                                    <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" name="name" placeholder="Last Name" required />
                                    </div>
                                    </div>
                                </div> -->
                                <!-- <div class="input_field radio_option">
                                    <input type="radio" name="radiogroup1" id="rd1">
                                    <label for="rd1">Male</label>
                                    <input type="radio" name="radiogroup1" id="rd2">
                                    <label for="rd2">Female</label>
                                </div> -->
                                <div class="input_field select_option">
                                <select name="subscriber_lot_id" id="level_of_training">
                                <option value="" disabled selected >Chọn hệ đào tạo</option>
                                    <?php 
                                        if($trainingTypeList){
                                            foreach($trainingTypeList as $typeTraining){
                                                echo
                                                <<< HTML
                                                    <option value="{$typeTraining['lot_id']}">{$typeTraining['lot_name']}</option>
                                                HTML;
                                            }
                                        }
                                    ?>
                                </select>
                                <?php 
                                    if(isset($res_errors_landing["errors"]['error_admin_mjr'])){
                                        echo <<<HTML
                                            <i class="fas fa-exclamation-circle" style="color: red;">
                                            <span class="text-danger" style="color: red; width:100%;font-size:12px;">{$res_errors_landing["errors"]['error_admin_mjr']}</span>
                                            </i>
                                        HTML;
                                    }
                                ?>
                                    <div class="select_arrow"></div>
                                </div>
                                <div class="input_field select_option">
                                <select name="subscriber_mjr_id" id="course">
                                </select>
                                <?php 
                                    if(isset($res_errors_landing["errors"]['error_admin_lot'])){
                                        echo <<<HTML
                                            <i class="fas fa-exclamation-circle" style="color: red;">
                                            <span class="text-danger" style="color: red; width:100%;font-size:12px;">{$res_errors_landing["errors"]['error_admin_lot']}</span>
                                            </i>
                                        HTML;
                                    }
                                ?>
                                    <div class="select_arrow"></div>
                                </div>
                                    <!-- <div class="input_field checkbox_option">
                                        <input type="checkbox" id="cb1">
                                        <label for="cb1">I agree with terms and conditions</label>
                                    </div>
                                    <div class="input_field checkbox_option">
                                        <input type="checkbox" id="cb2">
                                        <label for="cb2">I want to receive the newsletter</label>
                                    </div> -->

                                <div class="row clearfix">
                                    <div class="input_field">
                                        <textarea name="subscriber_note" id="note" placeholder="Ghi chú" rows="6"></textarea>
                                    </div>
                                </div>
                                <input class="button register" type="submit" value="ĐĂNG KÝ" />
                            </form>
                        </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="courses-box content">
                <h2 class="courses-box__title">
                    các khoá đào tạo & liên kết đào tạo
                </h2>
                <section class="courses-box__body">
                    <?php 
                        foreach($LevelOfTraining as $levelOfTrainingItem) {

                            $majorsHTML = "";
                            $levelOfTrainingItem['link_url'] = '/level-of-traning/get-majors/' . trim(Str::slug($levelOfTrainingItem["lot_name"])) . "-" . $levelOfTrainingItem["lot_id"];

                            foreach($levelOfTrainingItem["majors"] as $majorsItem) {

                                $majorsURL = "/majors/review/" . Str::slug($majorsItem["mjr_name"]) . "-" . $majorsItem["mjr_id"];

                                $majorsHTML .= <<<HTML
                                    <a href="{$majorsURL}">
                                        <p style="margin: 8px 0;">{$majorsItem["mjr_name"]}</p>
                                    <a>
                                HTML;
                            }

                            echo <<<HTML
                                <article class="course-box course-box-item">
                                    <div class="course-box__thumbnal">
                                        <img src="{$levelOfTrainingItem['lot_main_profile']}" alt="..." style="">
                                    </div>
                                    <div>
                                        <h4 class="course-box__title">
                                            {$levelOfTrainingItem["lot_name"]}
                                        </h4>
                                        <div class="course-box__body">
                                            {$majorsHTML}
                                        </div>
                                        <a href="{$levelOfTrainingItem['link_url']}" class="course-box__footer">Xem thêm</a>
                                    </div>
                                </article>
                            HTML;
                        }
                    ?>
                </section>
            </section>

            <div>
                <h2 class="courses-box__title">
                    Tin tức & sự kiện
                </h2>
                <section class="news-container" style="justify-content: space-between;">
                    <?php 
                        $newsLeft = [];
                        $newsRight = [];

                        for($i = 0; $i < count($news); $i++) {

                            $news[$i]['news_created_at_format'] = date_format(date_create($news[$i]['news_created_at']), "d/m/Y");

                            if(isset($news[$i])) {

                                if($i < ceil(count($news) / 2)) {

                                    array_push($newsLeft, $news[$i]);
                                }
                                else {
        
                                    array_push($newsRight, $news[$i]);
                                }
                            }
                        }
                    ?>
                    <section class="news-box news-home-box news-home-box-l">
                        <?php 
                            foreach($newsLeft as $newsItem) {

                                $newsItem['link_url'] = '/news-detail/' . trim(Str::slug($newsItem["news_title"])) . "-" . $newsItem["news_id"];

                                echo <<<HTML
                                    <article class="news-item news-home-item">
                                        <a href="{$newsItem['link_url']}" class="news-item__thumbail">
                                            <img src="{$newsItem['news_representative_image']}" width="128" class="news-home-image"/>
                                        </a>
                                        <a href="{$newsItem['link_url']}" class="news-item__title">
                                            <div class="home-wrapper-news-content">
                                                {$newsItem['news_title']}
                                                <span class="home-news-created-at">
                                                    <i class="far fa-clock"></i> {$newsItem['news_created_at_format']} 
                                                    <span class="home-news-view-number"><i class="far fa-eye"></i> {$newsItem['news_num_of_view']}</span>
                                                </span>
                                            </div>
                                        </a>
                                    </article>
                                HTML;
                            }
                        ?>
                        
                    </section>
                    <section class="news-box news-home-box news-home-box-r">
                        <?php 
                            foreach($newsRight as $newsItem) {

                                $newsItem['link_url'] = '/news-detail/' . trim(Str::slug($newsItem["news_title"])) . "-" . $newsItem["news_id"];

                                echo <<<HTML
                                    <article class="news-item news-home-item">
                                        <a href="{$newsItem['link_url']}" class="news-item__thumbail">
                                            <img src="{$newsItem['news_representative_image']}" class="news-home-image"/>
                                        </a>
                                        <a href="{$newsItem['link_url']}" class="news-item__title">
                                            <div class="home-wrapper-news-content">
                                                {$newsItem['news_title']}
                                                <span class="home-news-created-at">
                                                    <i class="far fa-clock"></i> {$newsItem['news_created_at_format']} 
                                                    <span class="home-news-view-number"><i class="far fa-eye"></i> {$newsItem['news_num_of_view']}</span>
                                                </span>
                                            </div>
                                        </a>
                                    </article>
                                HTML;
                            }
                        ?>
                    </section>
                </section>
            </div>
        </section>

        <section class="map-box">
            <?= $GoogleMapAddressEmbed['tt_code']; ?>
        </section>

        <!--------------Footer page-------------->
        <?php includeFile('pages/client/components/footer_page.view.php');?>

    </main>
    
    <?php includeFile('pages/client/components/subscriber_box.view.php');?>

    <?php includeFile('pages/client/components/footer_landing_box.view.php');?>
    
</body>

    <script src="/public/client/assets/js/app.js"></script>
    <script>

        if(($('.status_scb').val()) == 1997) {

            window.alert("Đăng ký thành công!");
        }

        if(($('#status-cc-form').val()) == true) {

            window.alert("Đăng ký thành công!");
        }

        const slideBtnLeft = $('#desc-slide__btn-left');

        const slideBtnRight = $('#desc-slide__btn-right');

        const slides = $('#desc-slider').children('a');
        
        let slideIndex = 1;
        
        if (slides.length > 0) showSlides();

        function showSlides() {

            $.each(slides, (index) => {

                $(slides[index]).css({

                    display: 'none',
                });
            });

            slideIndex++;

            if (slideIndex > slides.length) {

                slideIndex = 1;
            }
            $(slides[slideIndex - 1]).css({
                // animation: 'slide 3s ease forward',
                display: 'block',
            });

            setTimeout(showSlides, 3000);
        }

        function pushSlides(n) {

            showSlide(slideIndex += n);
        }

        function currentSlide(n) {

            showSlide(slideIndex = n);
        }

        function showSlide(n) {

            if (n > slides.length) {

                slideIndex = 1;
            }
            if (n < 1) {

                slideIndex = slides.length;
            }
            $.each(slides, index => {

                $(slides[index]).css({

                    display: 'none',
                });

                $(slides[index]).animate({}); 
            });

            $(slides[slideIndex - 1]).css({
                display: 'block',
                // animation: 'slide 3s ease forward',
            });
        }

        slideBtnLeft.click(() => {

            pushSlides(-1);
        });

        slideBtnRight.click(() => {

            pushSlides(1);
        });
    </script>
</html>
