<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức - Sự kiện</title>

    <link rel="stylesheet" href="/public/client/assets/css/style.css">
    <link rel="stylesheet" href="/public/client/assets/css/override-convert-app.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JQuery -->
    <script src="/public/client/assets/lib/jquery-3.4.1.min.js"></script>

    <style>
        .main-header--outter {
            background-image: linear-gradient(rgba(121, 134, 150, 0.7), rgba(121, 134, 150, 0.7)), url("<?= $bgUI['headerBG']['suib_img']; ?>");
        }

        .main-footer--outter {
            background-image: linear-gradient(rgba(75, 75, 75, 0.5), rgba(75, 75, 75, 0.5)), url("<?= $bgUI['footerBG']['suib_img']; ?>");
        }

        @media only screen and (max-width:992px) {
            .desc__title {
                margin-top: 2rem;
            }

            .news-container.container {
                padding: 1rem;
            }
        }

        @media only screen and (max-width : 48em) {
            .desc__title {
                margin-top: 2rem;
                display: block;
            }
        }
    </style>
</head>

<body>
    <main class="main-wrapper">
        <header class="main-header--outter">

            <!--Navbar Header-->
            <?php includeFile('pages/client/components/navbar_header.view.php'); ?>

            <section class="container main-header__desc main-header__desc-no-home">
                <h1 class="desc__title" style="text-align: center; text-transform: uppercase;" id="page-title">
                    Thông báo - tin tức chung
                </h1>
                <!-- <nav class="history-bar">
                    <p><a href="#" class="previous-page">
                        Trang chủ
                    </a><a href="#" class="present-page">tin tức</a></p>
                </nav> -->
            </section>
        </header>

        <!--Navbar Header-->
        <?php includeFile('pages/client/components/navbar_header-mobile.view.php'); ?>

        <section class="news-container container">

            <!--------------News container-------------->
            <section class="news-block">
                <?php
                foreach ($newsList as $news) {

                    $date_created_at                    = date_format(date_create($news['news_created_at']), "d/m/Y");
                    $news_representative_image_format   = !is_null($news['news_representative_image']) ? $news['news_representative_image'] : '/public/storage/images/default-news-image.jpg';

                    $news['link_url'] = '/news-detail/' . trim(Str::slug($news["news_title"])) . "-" . $news["news_id"];

                    $shortReadMore = Str::limit(trim($news["news_short_content"]), 255, '...');

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
                                    {$shortReadMore}
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
            <?php includeFile('pages/client/components/plugins/news/news_sidebar.view.php'); ?>

        </section>

        <!--------------Footer page-------------->
        <?php includeFile('pages/client/components/footer_page.view.php'); ?>

    </main>

    <?php includeFile('pages/client/components/subscriber_box.view.php'); ?>

    <?php includeFile('pages/client/components/footer_landing_box.view.php'); ?>

</body>

</html>