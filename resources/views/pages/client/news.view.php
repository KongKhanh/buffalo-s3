<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>

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

            <section class="news-block">
                <?php 
                    foreach ($newsList as $news) {

                        $date_created_at                    = date_format(date_create($news['news_created_at']), "d/m/Y");
                        $news_representative_image_format   = !is_null($news['news_representative_image']) ? $news['news_representative_image'] : '/public/storage/images/default-news-image.jpg';

                        echo <<<HTML
                            <article class="news-box">
                                <a class="news-box__thumbnail" href="{$news['link_url']}">
                                    <img src="{$news_representative_image_format}" alt="news_representative_image">
                                </a>
                                <a class="news-box__title" href="news-detail.html">
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
                ?>
            </section>

            <!--------------News sidebar-------------->
            <aside class="sidebar">
                <section class="searchbar">
                    <h4 class="sidebar__title">
                        Chức năng tra cứu thông tin
                    </h4>
                    <form action="" class="searchbar-form">
                        <i class="fas fa-search"></i>
                        <input type="text" name="search" id="search" placeholder="Từ khoá tìm kiếm...">
                    </form>
                </section>
                <section class="category">
                    <h4 class="sidebar__title">
                        Danh mục:
                    </h4>
                    <ul class="category-list">
                        <?php 
                            foreach ($newsCate as $newsCateItem) {
                                echo <<<HTML
                                    <li class="category-item">
                                        <button onclick="showCategoryMenu(this.parentNode)">
                                            {$newsCateItem["news_cate_title"]}
                                        </button>
                                        <ul class="subcategory-list">
                                            <!-- <li class="subcategory-item">
                                                    Tin đào tạo
                                            </li>
                                            <li class="subcategory-item">
                                                Tin hành chính
                                            </li> -->
                                        </ul>
                                    </li>
                                HTML;
                            }
                        ?>
                    </ul>
                </section>
                <section class="relate-posts">
                    <h4 class="sidebar__title">
                        Bài viết mới nhất
                    </h4>
                    <section class="relate-posts__container">
                        <?php 
                            foreach ($latestNews as $latestNews_Item) {

                                $date_created_at                    = date_format(date_create($latestNews_Item['news_created_at']), "d/m/Y");
                                $news_representative_image_format   = !is_null($latestNews_Item['news_representative_image']) ? $latestNews_Item['news_representative_image'] : '/public/storage/images/default-news-image.jpg';

                                echo <<<HTML
                                    <a href="{$latestNews_Item['link_url']}">
                                        <article class="relate-post">
                                                <div class="relate-post__thumbnail">
                                                    <img src="{$news_representative_image_format}" alt="news_representative_image">
                                                </div>
                                                <div class="relate-post__detail">
                                                    <h4 class="relate-post__title">
                                                        {$latestNews_Item["news_title"]}
                                                    </h4>
                                                    <p class="relate-post__author">
                                                        <i class="fas fa-user-edit"></i>Admin
                                                        <span class="relate-post__date">Ngày đăng: {$date_created_at}</span>
                                                    </p>
                                                </div>
                                            
                                        </article>
                                    </a>
                                HTML;
                            }
                        ?>
                    </section>
                </section>
                <section class="relate-tags">
                    <h4 class="sidebar__title">
                        Tag liên kết
                    </h4>
                    <article class="tags">
                        Đào tạo
                    </article>
                    <article class="tags">
                        Hành chánh
                    </article>
                    <article class="tags">
                        Học tập
                    </article>
                    <article class="tags">
                        Hoạt động - Thể thao
                    </article>
                    <article class="tags">
                        Học phí
                    </article>
                    <article class="tags">
                        Điểm thi
                    </article>
                </section>
            </aside>

        </section>
        <footer class="main-footer--outter">
            <section class="container">
                <section class="contacts-box content-box">
                    <section class="contacts-box__header">
                        <ul class="contacts-box__list">
                            <li class="contacts-box__list--item">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li class="contacts-box__list--item"><a href="#"><i class="fab fa-facebook-messenger"></i></a></li>
                            <li class="contacts-box__list--item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="contacts-box__list--item"><a href="#"></a></li>
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
                                <p>(028) 38 225 969 - (028) 38 960 479</p>
                            </div>
                        </article>
                        <article class="contact-box">
                            <div class="contact-box--icon">
                                <i class="fas fa-fax"></i>
                            </div>
                            <div class="contact-box-desc">
                                <p>(028) 38 225 969 - (028) 38 960 479</p>
                            </div>
                        </article>
                        <article class="contact-box">
                            <div class="contact-box--icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-box-desc">
                                <p>tuyensinh@ats.edu.vn</p>
                            </div>
                        </article>
                        <article class="contact-box">
                            <div class="contact-box--icon">
                                <i class="fas fa-map"></i>
                            </div>
                            <div class="contact-box--desc">
                                <p>Cơ sở 1: 40 Đinh Tiên Hoàng, P.Đa Kao, Quận 1</p>
                                <p>Cơ sở 2: 52 Đường D400, KP.3, P.Tân Phú, Quận 9</p>
                                <p class="contact-box--detail">
                                    Liên kết tại Bình Chánh: Trung tâm Giáo dục nghề nghiệp - Giáo dục thường xuyên (GDNN-GDTX) huyện Bình Chánh (Số 4 Đường số 6 Khu hành chính huyện, Thị trấn Tân Túc, Huyện Bình Chánh).
                                </p>
                                <p class="contact-box--detail">
                                    Liên kết tại Q.12: Trường Trung Cấp Kinh Tế Kỹ Thuật Quận 12 (592 Nguyễn Ảnh Thủ, Phường Trung Mỹ Tây, Quận 12).
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
                            <p><span id="access-time">1234567</span> lượt</p>
                        </article>
                        <article class="main-footer__track-item">
                            <p>Đang online</p>
                            <p><span id="online">123</span> nguời</p>
                        </article>
                    </section>
                </article>
                <article class="main-footer__desc">
                    <p>Trường Trung Cấp Kỹ Thuật Nông Nghiệp Thành Phố Hồ Chí Minh</p>
                    <p>Designed by &#169; ProQ - Email: proq@gmail.com</p>
                </article>
            </section>
        </footer>
    </main>
</body>
</html>