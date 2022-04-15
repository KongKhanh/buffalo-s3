<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tin tức</title>
    
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
    <style>
        .main-header--outter {
            background-image: linear-gradient(rgba(121, 134, 150, 0.7), rgba(121, 134, 150, 0.7)), url("<?= $bgUI['headerBG']['suib_img']; ?>");
        }
        .main-footer--outter {
            background-image: linear-gradient(rgba(75, 75, 75, 0.5), rgba(75, 75, 75, 0.5)), url("<?= $bgUI['footerBG']['suib_img']; ?>");
        }

        /*max-width: 992px*/
        @media only screen and (max-width:992px){
            .news-container{
                padding: 1rem 0;
                margin: 0 auto;
                flex-wrap: wrap;
            }
         }

        /*max-width: 768px*/
        @media only screen and (max-width : 768px){
            .relate-posts__container{
                flex-wrap: wrap;
            }
            .news-box__thumbnail {
                display: block;
            }
            .relate-post{
                width: 100%;
            }
            .relate-post__thumbnail img{
                max-width: 670px;
                max-height: 450px;
                object-fit: cover;
            }
            .main-footer--inner{
                margin-top: 2rem;
            }
        }

        /* max-width: 480px */
        @media only screen and (max-width: 480px) {
            .news-container{
                margin-top:2rem ;

            }
            .relate-post{
                width: 100%;
            }
            .relate-post__thumbnail img{

                object-fit: cover;
            }

            .contacts-box {
                margin-bottom: 4rem;
            }
            .main-footer__desc{
                font-size: .9em;
            }
            .main-footer--inner p:last-child{
                padding: 1rem 0;
            }

        }
    </style>
</head>
<body>
    <main class="main-wrapper">
        <header class="main-header--outter">

            <!--Navbar Header-->
            <?php includeFile('pages/client/components/navbar_header.view.php');?>
            
            <section class="container main-header__desc main-header__desc-no-home">
                <h1 class="desc__title" style="text-align: center; text-transform: uppercase;" id="news-title">
                    <?= $newsItem['news_title']; ?>
                </h1>
                <!-- <nav class="history-bar">
                    <p>
                        <a href="#" class="previous-page">Trang chủ</a>
                        <a href="#" class="previous-page">thông báo</a>
                        <a href="#" class="present-page">Thông báo tuyển sinh trung cấp 2020</a>
                    </p>
                </nav> -->
                <div class="post-detail">
                    <p>
                        Người viết<span>Admin</span>
                    </p>
                    <p>
                        Ngày đăng<span><?= date_format(date_create($newsItem['news_created_at']), "d/m/Y"); ?></span>
                    </p>
                    <p>
                        Lượt xem<span><?= $newsItem['news_num_of_view']; ?></span>
                    </p>
                </div>
            </section>
        </header>


        <?php includeFile('pages/client/components/navbar_header-mobile.view.php');?>

        <section class="news-container container">

            <section class="news-block">
                <article class="news-box no-flex">
                    <div class="news-box__thumbnail">
                        <img src="<?= !is_null($newsItem['news_representative_image']) ? $newsItem['news_representative_image'] : '/public/storage/images/default-news-image.jpg'; ?>" alt="news_representative_image">
                    </div>
                    <h4 class="news-box__title">
                        <?= $newsItem['news_title']; ?>
                    </h4>
                    <div class="news-box__desc">
                        <?= $newsItem['news_main_content']; ?>
                    </div>
                </article>
            </section>

            <!--------------News sidebar-------------->
            <?php includeFile('pages/client/components/plugins/news/news_sidebar.view.php');?>

        </section>

        <!--------------News sidebar-------------->
        <?php includeFile('pages/client/components/footer_page.view.php');?>

    </main>

    <?php includeFile('pages/client/components/subscriber_box.view.php'); ?>

    <?php 
        includeFile('pages/client/components/footer_landing_box.view.php');
    ?>
</body>

<script src="/public/client/assets/js/app.js"></script>

</html>