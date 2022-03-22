<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu về trường</title>

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
    <main class="main-wrapper">
        <header class="main-header--outter">
            
            <!--Navbar Header-->
            <?php includeFile('pages/client/components/navbar_header.view.php');?>

            <section class="container main-header__desc main-header__desc-no-home">
                <h1 class="desc__title" style="text-align: center; text-transform: uppercase;" id="page-title">
                    Giới thiệu trường
                </h1>
                <!-- <nav class="history-bar">
                    <p>
                        <a href="#" class="previous-page">Trang chủ</a>
                        <a href="#" class="present-page">Giới thiệu trường</a>
                    </p>
                </nav> -->
            </section>
        </header>

        <!--Navbar Header-->
        <?php includeFile('pages/client/components/navbar_header-mobile.view.php');?>

        <section class="news-container container">
            <section class="news-block">
                <article class="news-box no-flex">
                    <!-- <div class="news-box__thumbnail">
                        <img src="/public/client/assets/images/image-3.jpeg" alt="">
                    </div> -->
                    <h4 class="news-box__title">
                        <?= $siteInfo['site_info_name']; ?> 
                    </h4>
                    <div class="news-box__desc">
                        <?= $siteInfo['siteIntro']['sii_intro']; ?> 
                    </div>
                </article>
            </section>
            <!--------------News sidebar-------------->
            <?php includeFile('pages/client/components/plugins/news/news_sidebar.view.php');?>

        </section>

        <?php includeFile('pages/client/components/footer_page.view.php');?>
        
    </main>

    <?php includeFile('pages/client/components/subscriber_box.view.php');?>

    <?php includeFile('pages/client/components/footer_landing_box.view.php');?>

    <script src="/public/client/assets/js/app.js"></script>

</body>

</html>