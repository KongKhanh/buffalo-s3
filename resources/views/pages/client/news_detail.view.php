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
    
    <section class="register-modal" id="registerModal">
        <section class="register-block register-modal--block">
            <i class="fas fa-times-circle" style="font-size: 1.5em;
            color: red;
            position: absolute;
            right: .5em;
            top: .5em;" id="registerModalHidden"></i>
            <form action="" id="registerForm" method="post">
                <article class="base-info">
                    <h4 class="register-title">
                        Thông tin cá nhân
                    </h4>
                    <section class="base-value">
                        <article class="input-block">
                            <div class="input-box">
                                <input type="text" name="fullName" id="fullName" placeholder="Họ và tên...">
                                <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                                <i class="fas fa-user input-tag"></i>
                            </div>
                            <p class="input-error">Vui lòng nhập họ tên</p>
                        </article>
                        <article class="input-block">
                            <div class="input-box">
                                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Số điện thoại...">
                                <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                                <i class="fas fa-phone input-tag"></i>
                            </div>
                            <p class="input-error">Vui lòng nhập lại số điện thoại</p>
                        </article>
                    </section>
                    <article class="input-block">
                        <div class="input-box">
                            <input type="text" name="dateOfBirth" id="dateOfBirth" placeholder="Ngày sinh" onfocus="(this.type = 'date')" onblur="(this.type = 'text')">
                            <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                            <i class="fas fa-calendar input-tag"></i>
                        </div>
                        <p class="input-error">Vui lòng nhập lại ngày sinh</p>
                    </article>
                    <article class="input-block">
                        <div class="input-box">
                            <input type="text" name="email" id="email" placeholder="Email...">
                            <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                            <i class="fas fa-envelope input-tag"></i>
                        </div>
                        <p class="input-error">Vui lòng nhập lại Email</p>
                    </article>
                    <article class="input-block">
                        <div class="input-box">
                            <input type="text" name="address" id="address" placeholder="Địa chỉ liên hệ...">
                            <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                            <i class="fas fa-map input-tag"></i>
                        </div>
                        <p class="input-error">Vui lòng nhập lại địa chỉ</p>
                    </article>
                    <article class="input-block">
                        <div class="input-box">
                            <select name="education" id="education">
                                <option value="-1" selected>Trình độ học vấn</option>
                                <option value="junior">Trung học cơ sở</option>
                                <option value="high">Trung học phổ thông</option>
                                <option value="other">Khác</option>
                            </select>
                            <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                        </div>
                        <p class="input-error">Vui lòng chọn lại trình độ học vấn</p>
                    </article>
                </article>
                <article class="other-info">
                    <h4 class="register-title">
                        Thông tin đăng ký xét tuyển
                    </h4>
                    <article class="input-block">
                        <div class="input-box">
                            <select name="trainingSystem" id="trainingSystem">
                                <option value="-1" selected>Hệ đào tạo</option>
                                <option value="mid">Trung cấp chuyên nghiệp</option>
                                <option value="short">Khóa ngắn hạn</option>
                                <option value="thematic">Khác</option>
                            </select>
                            <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                        </div>
                        <p class="input-error">Vui lòng chọn lại hệ đào tạo</p>
                    </article>
                    <article class="input-block">
                        <div class="input-box">
                            <select name="course" id="course">
                                <option value="-1" selected>Ngành đào tạo</option>
                                <option value="1">Quản lý nhà đất</option>
                                <option value="2">Quản lý đất đai</option>
                                <option value="3">Chăn nuôi - Thú y</option>
                                <option value="4">Kế toán doanh nghiệp</option>
                                <option value="5">Thuỷ lợi tổng hợp</option>
                                <option value="6">Bảo trì & sửa chữa thiết bị nhiệt(cơ điện lạnh)</option>
                                <option value="7">Trồng trọt và Bảo vệ thực vật</option>
                                <option value="8">Trắc địa - Địa hình - Địa chính</option>
                                <option value="9">Điện công nghiệp và Dân dụng</option>
                                <option value="10">Quản lý tài nguyên môi trường</option>
                                <option value="11">Kinh doanh bất động sản</option>
                                <option value="12">Thiết kế cảnh quan viên</option>
                            </select>
                            <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                        </div>
                        <p class="input-error">Vui lòng chọn lại ngành đào tạo</p>
                    </article>
                    <article class="input-block">
                        <div class="input-box">
                            <textarea name="note" id="note" placeholder="Ghi chú"></textarea>
                        </div>
                    </article>
                </article>
                <article class="register--btn">
                    <button id="registerSubmit" name="registerSubmit">
                        Đăng ký
                    </button>
                </article>
            </form>
        </section>
    </section>

    <?php 
        includeFile('pages/client/components/footer_landing_box.view.php');
    ?>
</body>

<script src="/public/client/assets/js/app.js"></script>

</html>