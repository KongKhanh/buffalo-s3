<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>

    <!-- <link rel="stylesheet" href="/public/client/assets/lib/bootstrap_v5/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="/public/client/assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <!-- JQuery -->
    <script src="/public/client/assets/lib/jquery-3.4.1.min.js"></script>
</head>
<body>
    <main class="main-wrapper">
        <header class="main-header--outter">
            <section class="main-header--inner">
                <a class="main-header__logo" href="index.html">
                    <img src="/public/client/assets/images/ats-logo-2.png" alt="">
                    <p class="logo-text">Trường Trung cấp
                        <br> Kỹ thuật Nông nghiệp</p>
                </a>
                <nav class="main-header__menubar">
                    <ul class="menubar__list">
                        <li class="menubar__list-item"><a href="#">Giới thiệu</a></li>
                        <li class="menubar__list-item"><a href="#">Phòng ban</a></li>
                        <li class="menubar__list-item"><a href="#">Tin tức</a></li>
                        <li class="menubar__list-item"><a href="#">Liên hệ</a></li>
                        <li class="menubar__list-item"><a href="#">Tuyển dụng</a></li>
                        <li class="menubar__list-item">
                            <button name="header-search--btn" class="btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </section>
            <section class="container main-header__desc">
                <h1 class="desc__title" style="text-align: center; text-transform: uppercase;" id="page-title">
                    Thông báo - tin tức chung
                </h1>
                <nav class="history-bar">
                    <p><a href="#" class="previous-page">
                        Trang chủ
                    </a><a href="#" class="present-page">tin tức</a></p>
                </nav>
            </section>
        </header>
        <section class="news-container container">

            <!--------------News container-------------->
            <section class="news-block">
                <?php 

                    if(count($newsByCate) <= 0) {

                        echo "***Hiện tại chưa có bài viết nào cho danh mục này !";
                    } 
                    else {
                        foreach ($newsByCate as $news) {

                            $date_created_at                    = date_format(date_create($news['news_created_at']), "d/m/Y");
                            $news_representative_image_format   = !is_null($news['news_representative_image']) ? $news['news_representative_image'] : '/public/storage/images/default-news-image.jpg';

                            echo <<<HTML
                                <article class="news-box">
                                    <a class="news-box__thumbnail" href="{$news['link_url']}">
                                        <img src="{$news_representative_image_format}" alt="news_representative_image">
                                    </a>
                                    <a class="news-box__title" href="{$news['link_url']}">
                                        {$news["news_title"]}
                                        <span class="news-box__views">{$news['news_num_of_view']} <i class="far fa-eye"></i>
                                    </a>
                                    <div class="news-box__author">
                                        <h4>Admin <span class="news-box__author--date">
                                            - {$date_created_at}
                                        </span></h4>
                                    </div>
                                    <div class="news-box__desc">
                                        <p>Căn cứ kế hoạch đà tạo năm học 2020 - 2021 do Uỷ ban nhân dân Thành phố Hồ Chí Minh giao.<br>Trường Trung cấp Kỹ thuật Nông nghiệp Thành phố. Mã trường: TCD0216 - Website: www.ats.edu.vn thông báo tuyển sinh đào tạo trình độ Trung cấp.<br>Hình thức đào tạo: Chính quy năm học 2020 - 2021 với nội dung sau:
                                        </p>
                                        <a href="{$news['link_url']}" class="news-box__detail">
                                            Xem thêm
                                        </a>
                                    </div>
                                </article>
                            HTML;
                        }                    
                    }
                ?>
            </section>

            <!--------------News sidebar-------------->
            <?php includeFile('pages/client/components/plugins/news/news_sidebar.view.php');?>

        </section>
        <!--------------Footer page-------------->
        <?php includeFile('pages/client/components/footer_page.view.php');?>
    </main>
    
    <?php 
        includeFile('pages/client/components/footer_landing_box.view.php');
    ?>
</body>
</html>