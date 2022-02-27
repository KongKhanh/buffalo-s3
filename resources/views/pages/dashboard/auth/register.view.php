<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard-Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="/public/dashboard/assets/images/favicon.ico">
        <!-- App css -->
        <link href="/public/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/public/dashboard/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="/public/dashboard/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    </head>
    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-3 pb-4 pb-sm-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <!-- <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="/public/dashboard/assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div> -->

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold text-uppercase">Trang Đăng KÝ</h4>
                                    <p class="text-muted mb-4">VMS helps managers manage all activities on the your platform.</p>
                                </div>

                                <form action="/dashboard/register" method="post">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Tên tài khoản (*)</label>
                                        <input class="form-control" type="text" name="admin_name" id="" required="" placeholder="Nhập tên tài khoản của bạn">
                                        <?php 
                                            if($errors['error_admin_name']){
                                                echo <<<HTML
                                                    <span class="text-danger">{$errors['error_admin_name']}</span>
                                                HTML;
                                            }
                                        ?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Số điện thoại (*)</label>
                                        <input class="form-control" type="text" id="" name="admin_phone" required="" placeholder="Nhập số điện thoại của bạn của bạn">
                                        <?php 
                                            if($errors['error_admin_phone']){
                                                echo <<<HTML
                                                    <span class="text-danger">{$errors['error_admin_phone']}</span>
                                                HTML;
                                            }
                                        ?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mật khẩu (*)</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="admin_password" class="form-control" placeholder="Nhập mật khẩu của bạn">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                            <?php 
                                            if($errors['error_admin_password']){
                                                echo <<<HTML
                                                    <span class="text-danger">{$errors['error_admin_password']}</span>
                                                HTML;
                                            }
                                        ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Auth Code (*)</label>
                                        <input class="form-control" type="text" id="" name="auth_code" required="" placeholder="Nhập Auth Code">
                                        <?php 
                                            if($errors['error_auth_code']){
                                                echo <<<HTML
                                                    <span class="text-danger">{$errors['error_auth_code']}</span>
                                                HTML;
                                            }
                                        ?>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="w-100 btn btn-primary text-uppercase" type="submit"> Tạo Mới Tài Khoản</button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Đã có tài khoản?<a href="/dashboard/login" class="text-muted ms-1"><b>Đăng nhập ngay</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            <?php echo date("Y") ?> © Buffalo Team Designer
        </footer>

        <!-- bundle -->
        <script src="/public/dashboard/assets/js/vendor.min.js"></script>
        <script src="/public/dashboard/assets/js/app.min.js"></script>
        
    </body>
</html>
