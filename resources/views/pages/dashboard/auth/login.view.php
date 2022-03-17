<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard-Login</title>
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
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold text-uppercase">Trang Đăng Nhập</h4>
                                    <?php
                                    if(isset($message)){
                                        echo
                                        <<<HTML
                                            <p class="text-success mb-4">{$message} </p>
                                        HTML;  
                                    } 
                                    else{
                                        echo
                                        <<<HTML
                                            <p class="text-muted mb-4">VMS helps managers manage all activities on the your platform.</p>
                                        HTML;
                                    }
                                    ?>
                                </div>

                                <form action="/dashboard/login" method="post">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Số điện thoại (*)</label>
                                        <input class="form-control" name="admin_phone" type="nụmber" id="emailaddress" required="" placeholder="Nhập số điện thoại của bạn">
                                        <?php 
                                            if(isset($errors['error_admin_phone'])){
                                                echo <<<HTML
                                                    <span class="text-danger">{$errors['error_admin_phone']}</span>
                                                HTML;
                                            }
                                        ?>
                                    </div>

                                    <div class="mb-3">
                                        <!-- <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a> -->
                                        <label for="password" class="form-label">Mật khẩu (*)</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="admin_password" class="form-control" placeholder="Nhập mật khẩu của bạn">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                        <?php 
                                            if(isset($errors['error_admin_password'])){
                                                echo <<<HTML
                                                    <span class="text-danger">{$errors['error_admin_password']}</span>
                                                HTML;
                                            }
                                        ?>
                                    </div>

                                    <div class="mb-3 mb-3">
                                        <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div> -->
                                        <?php 
                                            if(isset($errors['error_admin_login'])){
                                                echo <<<HTML
                                                    <span class="text-danger">{$errors['error_admin_login']}</span>
                                                HTML;
                                            }
                                        ?>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="w-100 btn btn-primary text-uppercase" type="submit"> Đăng Nhập </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Chưa có tài khoản? <a href="/dashboard/register" class="text-muted ms-1"><b>Đăng ký ngay</b></a></p>
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
