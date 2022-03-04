<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="/public/client/assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JQuery -->
    <script src="/public/client/assets/lib/jquery-3.4.1.min.js"></script>
    <script src="/public/client/assets/js/app.js"></script>
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
                    <ul class="menubar__list nav__pc">
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
                    Đăng ký học viên mới
                </h1>
                <nav class="history-bar">
                    <p>
                        <!-- <a href="#" class="previous-page">Trang chủ</a> -->
                        <!-- <a href="#" class="present-page">Giới thiệu trường</a> -->
                    </p>
                </nav>
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
            </ul>
        </nav>
        <!-- #endregion News -->
        <section class="form-container container">
            <section class="register-block">
                <form action="" id="registerForm" method="POST">
                    <article class="base-info">
                        <h4 class="register-title">
                            Thông tin cá nhân
                        </h4>
                        <article class="input-block">
                            <label for="fullName">Họ và tên</label>
                            <div class="input-box">
                                <input type="text" name="subscriber_name" id="fullName" placeholder="Họ và tên...">
                                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                                <?php 
                                    if(isset($errors['error_admin_name'])){
                                        echo <<<HTML
                                            <span class="text-danger" style="color: red;">{$errors['error_admin_name']}</span>
                                        HTML;
                                    }
                                ?>
                            </div>
                            <p class="input-error">Vui lòng nhập họ tên</p>
                        </article>
                        <article class="input-block">
                            <label for="dateOfBirth">Ngày sinh</label>
                            <div class="input-box">
                                <input type="date" name="subscriber_dob" id="dateOfBirth" placeholder="dd/mm/yyyy">
                                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                                <?php 
                                    if(isset($errors['error_admin_dob'])){
                                        echo <<<HTML
                                            <span class="text-danger" style="color: red;">{$errors['error_admin_dob']}</span>
                                        HTML;
                                    }
                                ?>
                            </div>
                            <p class="input-error">Vui lòng nhập lại ngày sinh</p>
                        </article>
                        <article class="input-block">
                            <label for="phoneNumber">Số điện thoại</label>
                            <div class="input-box">
                                <input type="number" name="subscriber_phone" id="phoneNumber" placeholder="Số điện thoại...">
                                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                                <?php 
                                    if(isset($errors['error_admin_phone'])){
                                        echo <<<HTML
                                            <span class="text-danger" style="color: red;">{$errors['error_admin_phone']}</span>
                                        HTML;
                                    }
                                ?>
                            </div>
                            <p class="input-error">Vui lòng nhập lại số điện thoại</p>
                        </article>
                        <article class="input-block">
                            <label for="email">Email</label>
                            <div class="input-box">
                                <input type="text" name="subscriber_email" id="email" placeholder="Email...">
                                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                                <?php 
                                    if(isset($errors['error_admin_email'])){
                                        echo <<<HTML
                                            <span class="text-danger" style="color: red;">{$errors['error_admin_email']}</span>
                                        HTML;
                                    }
                                ?>
                            </div>
                            <p class="input-error">Vui lòng nhập lại Email</p>
                        </article>
                        <article class="input-block">
                            <label for="address">Địa chỉ</label>
                            <div class="input-box">
                                <input type="text" name="subscriber_address" id="address" placeholder="Địa chỉ liên hệ...">
                                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                                <?php 
                                    if(isset($errors['error_admin_address'])){
                                        echo <<<HTML
                                            <span class="text-danger" style="color: red;">{$errors['error_admin_address']}</span>
                                        HTML;
                                    }
                                ?>
                            </div>
                            <p class="input-error">Vui lòng nhập lại địa chỉ</p>
                        </article>
                        <!-- <article class="input-block">
                            <label for="education">Trình độ học vấn</label>
                            <div class="input-box">
                                <select name="education" id="education">
                                    <option value="junior" selected>Trung học cơ sở</option>
                                    <option value="high">Trung học phổ thông</option>
                                    <option value="other">Khác</option>
                                </select>
                                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                            </div>
                            <p class="input-error">Vui lòng chọn lại trình độ học vấn</p>
                        </article> -->
                    </article>
                    <article class="other-info">
                        <h4 class="register-title">
                            Thông tin đăng ký xét tuyển
                        </h4>
                        <article class="input-block">
                            <label for="trainingSystem">Hệ đào tạo</label>
                            <div class="input-box">
                                <select name="subscriber_lot_id" id="trainingSystem">
                                <option value="" disabled selected >Chọn hệ đào tạo</option>
                                    <?php 
                                        if($trainingTypeList){
                                            foreach($trainingTypeList as $typeTraining){
                                                echo
                                                <<< HTML
                                                    <option value="{$typeTraining['lot_id']}">{$typeTraining['lot_name']}</option>
                                                HTML;
                                            }
                                        }
                                    ?>
                                </select>
                                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                            </div>
                            <p class="input-error">Vui lòng chọn lại hệ đào tạo</p>
                        </article>
                        <article class="input-block">
                            <label for="course">Ngành đào tạo</label>
                            <div class="input-box">
                                <select name="subscriber_mjr_id" id="course">
                                    <option value="1" selected>Quản lý nhà đất</option>
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
                                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                            </div>
                            <p class="input-error">Vui lòng chọn lại ngành đào tạo</p>
                        </article>
                    </article>
                    <article class="register--btn">
                        <!-- <button id="registerSubmit" name="registerSubmit">
                            Đăng ký
                        </button> -->
                        <input id="registerSubmit" name="registerSubmit" value="Đăng ký" type="submit">
                    </article>
                </form>
            </section>
            <aside class="sidebar">
                <sectio class="searchbar">
                    <h4 class="sidebar__title">
                        Chức năng tra cứu thông tin
                    </h4>
                    <form action="" class="searchbar-form">
                        <i class="fas fa-search"></i>
                        <input type="text" name="search" id="search" placeholder="Từ khoá tìm kiếm...">
                    </form>
                </sect>
                <section class="category">
                    <h4 class="sidebar__title">
                        Danh mục:
                    </h4>
                    <ul class="category-list">
                        <li class="category-item">
                            Tin tức chung
                            <ul class="subcategory-list">
                                <li class="subcategory-item">
                                    Tin đào tạo
                                </li>
                                <li class="subcategory-item">
                                    Tin hành chính
                                </li>
                            </ul>
                        </li>
                        <li class="category-item">
                            Tin đào tạo - Hành chính
                            <ul class="subcategory-list">
                                <li class="subcategory-item">
                                    Tin đào tạo
                                </li>
                                <li class="subcategory-item">
                                    Tin hành chính
                                </li>
                            </ul>
                        </li>
                        <li class="category-item">
                            Tin Học tập
                            <ul class="subcategory-list">
                                <li class="subcategory-item">
                                    Tin đào tạo
                                </li>
                                <li class="subcategory-item">
                                    Tin hành chính
                                </li>
                            </ul>
                        </li>
                        <li class="category-item">
                            Tin Hoạt động - thể thao
                            <ul class="subcategory-list">
                                <li class="subcategory-item">
                                    Tin đào tạo
                                </li>
                                <li class="subcategory-item">
                                    Tin hành chính
                                </li>
                            </ul>
                        </li>
                        <li class="category-item">
                            Thông báo chung
                            <ul class="subcategory-list">
                                <li class="subcategory-item">
                                    Tin đào tạo
                                </li>
                                <li class="subcategory-item">
                                    Tin hành chính
                                </li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <section class="relate-posts">
                    <h4 class="sidebar__title">
                        Bài viết mới nhất
                    </h4>
                    <section class="relate-posts__container">
                        <article class="relate-post">
                            <div class="relate-post__thumbnail">
                                <img src="/public/client/assets/images/image-3.jpeg" alt="">
                            </div>
                            <div class="relate-post__detail">
                                <h4 class="relate-post__title">
                                    Thông báo tuyển sinh trung cấp 2020
                                </h4>
                                <p class="relate-post__author">
                                    <i class="fas fa-user-edit"></i>
                                    <span class="relate-post__date">ngày 01/07/2020</span>
                                </p>
                            </div>
                        </article>
                        <article class="relate-post">
                            <div class="relate-post__thumbnail">
                                <img src="/public/client/assets/images/image-1.jpeg" alt="">
                            </div>
                            <div class="relate-post__detail">
                                <h4 class="relate-post__title">
                                    Trường tham gia ngầy hội tư vấn tuyển sinh tại Nhà ...
                                </h4>
                                <p class="relate-post__author">
                                    <i class="fas fa-user-edit"></i>
                                    <span class="relate-post__date">ngày 30/06/2020</span>
                                </p>
                            </div>
                        </article>
                        <article class="relate-post">
                            <div class="relate-post__thumbnail">
                                <img src="/public/client/assets/images/image-2.jpeg" alt="">
                            </div>
                            <div class="relate-post__detail">
                                <h4 class="relate-post__title">
                                    Đoàn viên thanh niên hãy là tuyên truyền bảo
                                </h4>
                                <p class="relate-post__author">
                                    <i class="fas fa-user-edit"></i>
                                    <span class="relate-post__date">ngày 29/06/2020</span>
                                </p>
                            </div>
                        </article>
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
        <footer class="main-footer--outter inside-box">
            <section class="container">
                <section class="contacts-box content-box inside-box__content">
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
            <section class="main-footer--inner inside-box__main">
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
    
    <script src="/public/client/assets/js/registerFormValidation.js" type="text/javascript"></script>
</body>

</html>