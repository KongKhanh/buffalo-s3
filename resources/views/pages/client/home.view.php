<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATS-Trang chủ</title>
    
    <link rel="stylesheet" href="/public/client/assets/css/style.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- JQuery -->
    <script src="/public/client/assets/lib/jquery-3.4.1.min.js"></script>
    <style>
      .menuParentList{
            color:white;
            position:absolute;
            top:100px;
            text-decoration: none;
            /* display:none; */
        } 
        .menuParentList a{
            display:block;
            text-align:left;
            text-decoration: none;
        }
        .menu_category:hover .menuParentList{ 
            display:block;
        }  
    </style>
</head>

<body>
    
    <main class="main-wrapper">
        <header class="main-header--outter">

            <!--Navbar Header-->
            <?php includeFile('pages/client/components/navbar_header.view.php');?>

            <section class="container main-header__desc">
                <article class="main-header__logo">
                    <img src="/public/client/assets/images/ats-logo-2.png" alt="">
                    <p class="logo-text">Trường Trung cấp
                        <br> Kỹ thuật Nông nghiệp</p>
                </article>
                <h1 class="desc__title">
                    Trường Trung cấp Kỹ thuật Nông nghiệp
                    <br> Thành phố Hồ Chí Minh
                </h1>
                <p class="desc__detail">
                    Trường Trung cấp Kỹ thuật Nông nghiệp thuộc Sở Nông nghiệp và Phát triển Nông thôn Thành phố Hồ Chí
                    Minh được thành lập trên cơ sở sáp nhập hai trường là Trường Trung học Nông nghiệp và Trường Công
                    nhân Kỹ thuật Thuỷ sản.
                </p>
                <div class="desc__research--btn">
                    <a class="btn" href="#">Tìm hiểu</a>
                </div>
            </section>
        </header>
        <!-- #region News -->
        <nav class="navbar__mobile">
            <label for="nav-mobile-input" class="nav__bars-btn">
                <i class="fas fa-bars"></i>
            </label>
            <input type="checkbox" name="" class="nav__input" id="nav-mobile-input" hidden>
            <label for="nav-mobile-input" class="nav-overlay"></label>
            <ul class="menubar__list nav__mobile">
                <label for="nav-mobile-input"  class="nav__mobile-close"><i class="fas fa-times"></i></label>
                <li class="menubar__mobile-list-item"><img src="/public/client/assets/images/ats-logo-2.png" alt=""></li>
                <li class="menubar__mobile-list-item" id="visited"><a href="#">Trang chủ</a></li>
                <li class="menubar__mobile-list-item"><a href="#">Giới thiệu</a></li>
                <li class="menubar__mobile-list-item"><a href="#">Phòng ban</a></li>
                <li class="menubar__mobile-list-item"><a href="#">Tin tức</a></li>
                <li class="menubar__mobile-list-item"><a href="#">Liên hệ</a></li>
                <li class="menubar__mobile-list-item"><a href="#">Tuyển dụng</a></li>
                <li class="menubar__list-item">
                    <input type="text" style="
                    padding: 1em;
                    margin: 1.5em 0;
                    border-radius: .5em;
                    border: none;
                    width: 90%;
                    font-size: 0.95em;" placeholder="Tìm kiếm">
                    <button name="header-search--btn" class="btn" style="color: white">
                        <i class="fas fa-search"></i>
                    </button>
                </li>
            </ul>
        </nav>
        <!-- #endregion News -->
        <section class="body-container container">
            <section class="event-box content-box">
                <!-- #region News  -->
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
                        <!-- Sources -->
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
                        <!-- Sources -->
                    </video>
                </article>
                <!-- #endregion News -->
            </section>
            <section class="majors-box content">
                <!-- #region News -->
                <section class="majors-box__content">
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
                        <div class="img-box">
                            <img src="/public/client/assets/images/image-4.jpeg" alt="" class="majors-box_thumbnail-1">
                            <img src="/public/client/assets/images/image-5.jpeg" alt="" class="majors-box_thumbnail-2">
                        </div>
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
                </section>
                <h2 class="majors-box__title">
                    các ngành đào tạo <br>
                    <span>
                        <?= date("Y");?>
                    </span>
                </h2>
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
                                        <p style="margin: 4px 0;">{$majorsItem["mjr_name"]}</p>
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
            <img src="/public/client/assets/images/map.png" alt="">
        </section>

        <!--------------Footer page-------------->
        <?php includeFile('pages/client/components/footer_page.view.php');?>

    </main>
    
    <?php includeFile('pages/client/components/subscriber_box.view.php');?>

    <?php includeFile('pages/client/components/footer_landing_box.view.php');?>
    
</body>

<script src="/public/client/assets/js/app.js"></script>

</html>
