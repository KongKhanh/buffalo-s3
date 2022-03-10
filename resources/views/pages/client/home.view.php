<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
    <link rel="stylesheet" href="/public/client/assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <!-- JQuery -->
    <script src="/public/client/assets/lib/jquery-3.4.1.min.js"></script>
    <style>
      .menuParentList{
            color:white;
            position:absolute;
            top:50px;
            text-decoration: none;
            /* display:none; */
        } 
        .menuParentList a{
            display:block;
            text-align:left;
            text-decoration: none;
        }
        .menu_category:hover .menuParentList{ 
            /* display:block; */
        }  
    </style>
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
                        <?php 
                            foreach($menuCategories as $menuCategory){
                                echo 
                                <<<HTML
                                    <li class="menubar__list-item menu_category" value="{$menuCategory['mc_id']}"><a href="javascript:void(0);">{$menuCategory['mc_title']}</a>
                                    </li>
                                HTML;
                            }
                        ?>
                        <li class="menubar__list-item">
                            <button name="header-search--btn" class="btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </section>
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
                            <li class="majors-box__list--item">Quản lý nhà đất</li>
                            <li class="majors-box__list--item">Quản lý đất đai</li>
                            <li class="majors-box__list--item">Chăn nuôi - Thú y</li>
                            <li class="majors-box__list--item">Kế toán doanh nghiệp</li>
                            <li class="majors-box__list--item">Thuỷ lợi tổng hợp</li>
                            <li class="majors-box__list--item">Kinh doanh bất động sản</li>
                        </div>
                        <div class="img-box">
                            <img src="/public/client/assets/images/image-4.jpeg" alt="" class="majors-box_thumbnail-1">
                            <img src="/public/client/assets/images/image-5.jpeg" alt="" class="majors-box_thumbnail-2">
                        </div>
                    </ol>
                    <ol class="majors-box__list" start="7">
                        <div>
                            <li class="majors-box__list--item">Bảo trì và sửa chữa thiết bị điện (cơ điện lạnh)</li>
                            <li class="majors-box__list--item">Điện công nghiệp và Dân dụng</li>
                            <li class="majors-box__list--item">Quản lý tài nguyên môi trường</li>
                        </div>
                        <div>
                            <li class="majors-box__list--item">Trắc địa - Đại hình - Địa chính</li>
                            <li class="majors-box__list--item">Thiết kế cảnh quan hoa viên</li>
                            <li class="majors-box__list--item">Trồng trọt và Bảo vệ thực vật</li>
                        </div>
                    </ol>
                </section>
                <h2 class="majors-box__title">
                    các ngành đào tạo <br><span>2022</span>
                </h2>
            </section>
            <section class="courses-box content">
                <h2 class="courses-box__title">
                    các khoá đào tạo & liên kết đào tạo
                </h2>
                <section class="courses-box__body">
                    <article class="course-box">
                        <div class="course-box__thumbnal">
                            <img src="/public/client/assets/images/image-1.jpeg" alt="">
                        </div>
                        <div>
                            <h4 class="course-box__title">
                                Liên kết đào tạo trung cấp
                            </h4>
                            <div class="course-box__body">
                                <p>Thiết kế quản trị website</p>
                                <p>Nghiệp vụ nhà hàng khách sạn</p>
                            </div>
                            <a href="#" class="course-box__footer">Xem thêm</a>
                        </div>
                    </article>
                    <article class="course-box">
                        <div class="course-box__thumbnal">
                            <img src="/public/client/assets/images/image-7.jpeg" alt="">
                        </div>
                        <div>
                            <h4 class="course-box__title">
                                Đào tạo văn bằng 2
                            </h4>
                            <div class="course-box__body">
                                <p>Chăn nuôi thú y</p>
                                <p>Trồng trọt - Bảo vệ thực vật</p>
                                <p>Quản lý đất đai</p>
                                <p>Trắc địa - Địa hình - Địa chính</p>
                            </div>
                            <a href="#" class="course-box__footer">Xem thêm</a>
                        </div>
                    </article>
                    <article class="course-box">
                        <div class="course-box__thumbnal">
                            <img src="/public/client/assets/images/image-2.jpeg" alt="">
                        </div>
                        <div>
                            <h4 class="course-box__title">
                                Đạo tạo Ngắn hạn
                            </h4>
                            <div class="course-box__body">
                                <p>Thiết kế quản trị website</p>
                                <p>Nuôi cá cảnh</p>
                                <p>Kỹ thuật trồng nấm</p>
                                <p>Kỹ thuật trồng hoa kiểng</p>
                                <p>Kỹ thuật trồng rau an toàn</p>
                            </div>
                            <a href="#" class="course-box__footer">Xem thêm</a>
                        </div>
                    </article>
                    <article class="course-box">
                        <div class="course-box__thumbnal">
                            <img src="/public/client/assets/images/image-6.jpeg" alt="">
                        </div>
                        <div>
                            <h4 class="course-box__title">
                                Liên kết đào tạo trung cấp
                            </h4>
                            <div class="course-box__body">
                                <p>Thiết kế quản trị website</p>
                                <p>Nghiệp vụ nhà hàng khách sạn</p>
                            </div>
                            <a href="#" class="course-box__footer">Xem thêm</a>
                        </div>
                    </article>
                </section>
            </section>
            <!-- #endregion News -->
        </section>
        <section class="map-box">
            <img src="/public/client/assets/images/map.png" alt="">
        </section>
        <footer class="main-footer--outter">
            <section class="container">
                <section class="contacts-box content-box">
                    <section class="contacts-box__header">
                        <ul class="contacts-box__list">
                            <li class="contacts-box__list--item">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li class="contacts-box__list--item"><a href="#"><i
                                        class="fab fa-facebook-messenger"></i></a></li>
                            <li class="contacts-box__list--item"><a href="#"><i class="fab fa-instagram"></i></a></li>
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
                                    Liên kết tại Bình Chánh: Trung tâm Giáo dục nghề nghiệp - Giáo dục thường xuyên
                                    (GDNN-GDTX) huyện Bình Chánh (Số 4 Đường số 6 Khu hành chính huyện, Thị trấn Tân
                                    Túc, Huyện Bình Chánh).
                                </p>
                                <p class="contact-box--detail">
                                    Liên kết tại Q.12: Trường Trung Cấp Kinh Tế Kỹ Thuật Quận 12 (592 Nguyễn Ảnh Thủ,
                                    Phường Trung Mỹ Tây, Quận 12).
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
<script>
    $(document).ready(function(){
    $(".menu_category").hover(function(){
        var idMc = $(this).val();
        if(idMc){
            $.ajax({
                method: "GET",
                url: `/menu-cate/parent/${idMc}`,
                headers: {
                    'Content-Type':'application/json'
                },
                }).done(function( res ) {
                    res = JSON.parse(res);

                    var getMenuCategory = " ";

                    for (let i = 0; i < res.matches.length; i++) { 

                            getMenuCategory += `<ul class="menuParentList"><a value= "${res.matches[i].mc_id}">${res.matches[i].mc_title}</a></ul>`
                    };
                    // $(".menuParentList")+=getMenuCategory;
                    console.log(getMenuCategory);
                    $(".menu_category").show();
                });
            }
        });
    });

</script>
</html>