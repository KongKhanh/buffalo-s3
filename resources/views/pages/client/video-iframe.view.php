<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các video sự kiện</title>

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
        .wrapper-majors-box {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }
        .card-video {
            border: 1px solid #FFFFFF;
            padding: 16px;
            width: 50%;
        }
        .card-video:hover {
            background-color: #f1f2f6;
            border-radius: 8px;
            box-shadow: 0 0 5px #ced6e0;
        }
        .card-video > iframe {
            width: 100%;
        }
        .majors-title {
            font-size: 16px;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <main class="main-wrapper">
        <header class="main-header--outter">
            
            <!--Navbar Header-->
            <?php includeFile('pages/client/components/navbar_header.view.php');?>

            <section class="container main-header__desc main-header__desc-no-home">
                <h1 class="desc__title" style="text-align: center; text-transform: uppercase;" id="page-title">
                    Các video sự kiện
                </h1>
                <!-- <nav class="history-bar">
                    <p>
                        <a href="#" class="previous-page">Trang chủ</a>
                        <a href="#" class="present-page">Video sự kiện</a>
                    </p>
                </nav> -->
            </section>
        </header>

        <!--Navbar Header-->
        <?php includeFile('pages/client/components/navbar_header-mobile.view.php');?>

        <section class="news-container container">
            <section class="news-block">

                <div class="news-box__desc" style="width: 100%;">
                    <div class="wrapper-majors-box wrapper-video-box">
                        <?php 
                            foreach($videoiframe as $video) {
                                echo <<<HTML
                                    <div class="card-video"> 
                                        <div class="card-body">
                                            <h5 class="majors-title">{$video['vi_title']}</h5>
                                        </div>
                                        {$video['vi_content']}
                                    </div>
                                HTML;
                            }
                        ?>
                    </div>
                </div>
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