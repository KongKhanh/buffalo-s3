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
                            Trường Trung cấp Kỹ thuật Nông nghiệp Thành phố Hồ Chí Minh
                        </h1>
                        <p class="desc__detail" style="color: #0A52A0">
                            <?= $siteInfo['site_info_short_description']; ?>
                        </p>
                        <div class="desc__research--btn">
                            <a class="btn" href="/about-us">Tìm hiểu</a>
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
                                                <img src="{$slide['ads_slide_img_link']}" class="desc-slide__item-thumbnail"/>     
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

        <!-- #endregion News -->
        <section class="body-container container">

            <!-- <section class="event-box content-box">
                <article class="content-box__body event-box__body pc">
                    <div>
                        <h2 class="content-box__title">
                            Các Sự kiện - Hoạt động của Trường
                            <i class="fas fa-volleyball-ball"></i>
                        </h2>
                        <p class="event-box__body__desc">
                            Trường Trung Cấp Kỹ Thuật Nông Nghiệp đã tham gia Ngày hội tuyển sinh, tư vấn hướng nghiệp
                            giáo dục nghề nghiệp năm 2019. Chủ đề: "Chọn đúng ngành - Thành công sớm".
                        </p>
                    </div>
                    <video controls poster="/public/client/assets/images/image-2.jpeg">

                    </video>
                </article>
                <article class="content-box__body event-box__body tablet">
                    <h2 class="content-box__title">
                        Các Sự kiện - Hoạt động của Trường
                        <i class="fas fa-volleyball-ball"></i>
                    </h2>
                    <p class="event-box__body__desc">
                        Trường Trung Cấp Kỹ Thuật Nông Nghiệp đã tham gia Ngày hội tuyển sinh, tư vấn hướng nghiệp
                        giáo dục nghề nghiệp năm 2019. Chủ đề: "Chọn đúng ngành - Thành công sớm".
                    </p>
                    <video controls poster="/public/client/assets/images/image-2.jpeg" class="content-box__video">

                    </video>
                </article>
            </section> -->
            
            <section class="majors-box content">
                <!-- #region News -->
                <section class="majors-box__content-wrapper">
                    <div class="majors-box__content">
                        <ol class="majors-box__list">
                            <div>
                                <?php 

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
                     <h2 class="majors-box__title">
                        các ngành đào tạo <br>
                        <span>
                            <?= 
                                date("Y");
                            ?>
                        </span>
                    </h2>
                </section>

                <div class="form_wrapper">
                    <div class="form_container">
                        <div class="title_container">
                        <h2>ĐĂNG KÝ ONLINE</h2>
                        </div>
                        <div class="row clearfix">
                        <div class="">
                            <form>
                                <div class="input_field"> <span><i class="fas fa-info"></i></span>
                                    <input type="email" name="text" placeholder="Họ và tên" required />
                                </div>
                                <div class="input_field"> <span><i class="fas fa-phone-alt"></i></span>
                                    <input type="password" name="number" placeholder="Số điện thoại" required />
                                </div>
                                <div class="input_field"> <span><i class="far fa-envelope"></i></span>
                                    <input type="password" name="email" placeholder="Email" required />
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
                                    <select>
                                    <option>Chọn hệ đào tạo</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div>
                                <div class="input_field select_option">
                                    <select>
                                    <option>Chọn ngành đào tạo</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    </select>
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
                                        <textarea name="note" id="note" placeholder="Ghi chú" rows="6"></textarea>
                                    </div>
                                </div>
                                <input class="button" type="submit" value="ĐĂNG KÝ" />
                            </form>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- <h2 class="majors-box__title"> -->
                    <!-- các ngành đào tạo <br> -->
                    <!-- <span> -->
                        <?= 
                            // date("Y");
                            ""
                        ?>
                    <!-- </span> -->
                <!-- </h2> -->

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
                                <article class="course-box">
                                    <div class="course-box__thumbnal">
                                        <img src="{$levelOfTrainingItem['lot_main_profile']}" alt="...">
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
            <!-- #endregion News -->
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

    const slideBtnLeft = $('#desc-slide__btn-left');
    const slideBtnRight = $('#desc-slide__btn-right');

    const slides = $('#desc-slider').children('a');
    
    let slideIndex = 1;
    
    if (slides.length > 0)
    showSlides();
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
            $(slides[index]).animate({
            }); 
        });

        $(slides[slideIndex - 1]).css({
            display: 'block',
            // animation: 'slide 3s ease forward',
        });
    }
    slideBtnLeft.click(() => {
        console.log('left');
        pushSlides(-1);
    });
    slideBtnRight.click(() => {
        console.log('right');
        pushSlides(1);
    });
</script>
</html>
