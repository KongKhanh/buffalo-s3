<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATS</title>
    
    <link rel="stylesheet" href="/public/client/assets/css/style.css">
    
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
            <section class="main-header--inner">
                <a class="main-header__logo" href="index.html">
                    <img src="/public/client/assets/images/ats-logo-2.png" alt="">
                    <p class="logo-text">Trường Trung cấp
                        <br> Kỹ thuật Nông nghiệp</p>
                </a>
                <nav class="main-header__menubar">

                    <ul class="menubar__list">
                        <?php 
                            foreach($menuCaties as $menuCate){
                                echo 
                                <<<HTML
                                    <li class="menubar__list-item"><a href="#">{$menuCate['mc_title']}</a></li>
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

        <!--------------Footer page-------------->
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

    <?php includeFile('pages/client/components/footer_landing_box.view.php');?>
    
</body>

<script src="/public/client/assets/js/app.js"></script>

</html>
