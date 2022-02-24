<?php

    View::__template()->__extends("layouts/dashboard/app.dashboard.view.php");

    View::__template()->__startSection("content");
?>

<!------------------------------------------------------------------------------ Script CSS -->
<!-- third party css -->
<link href="/public/dashboard/assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
<link href="/public/dashboard/assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
<!-- third party css end -->


<div class="content">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topbar-menu float-end mb-0">
            <li class="dropdown notification-list d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="dripicons-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="/public/dashboard/assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12"> 
                    <span class="align-middle d-none d-sm-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="/public/dashboard/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="/public/dashboard/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="/public/dashboard/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="/public/dashboard/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="dripicons-bell noti-icon"></i>
                    <span class="noti-icon-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-end">
                                <a href="javascript: void(0);" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>

                    <div style="max-height: 230px;" data-simplebar="">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="/public/dashboard/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt=""> </div>
                            <p class="notify-details">Cristina Pride</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Hi, How are you? What about our next meeting</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="/public/dashboard/assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt=""> </div>
                            <p class="notify-details">Karen Robinson</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Wow ! this admin looks good and awesome design</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View All
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list d-none d-sm-inline-block">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="dripicons-view-apps noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                    <div class="p-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/public/dashboard/assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/public/dashboard/assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/public/dashboard/assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/public/dashboard/assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/public/dashboard/assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/public/dashboard/assets/images/brands/g-suite.png" alt="G Suite">
                                    <span>G Suite</span>
                                </a>
                            </div>
                        </div> <!-- end row-->
                    </div>

                </div>
            </li>

            <li class="notification-list">
                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                    <i class="dripicons-gear noti-icon"></i>
                </a>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar"> 
                        <img src="/public/dashboard/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                    </span>
                    <span>
                        <span class="account-user-name">Soeng Souy</span>
                        <span class="account-position">Founder</span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-circle me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-edit me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-lifebuoy me-1"></i>
                        <span>Support</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-lock-outline me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout me-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>

        </ul>
        <button class="button-menu-mobile open-left">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="app-search dropdown d-none d-lg-block">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                    <span class="mdi mdi-magnify search-icon"></span>
                    <button class="input-group-text btn-primary" type="submit">Search</button>
                </div>
            </form>

            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="uil-notes font-16 me-1"></i>
                    <span>Analytics Report</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="uil-life-ring font-16 me-1"></i>
                    <span>How can I help you?</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="uil-cog font-16 me-1"></i>
                    <span>User profile settings</span>
                </a>

                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                </div>

                <div class="notification-list">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="d-flex">
                            <img class="d-flex me-2 rounded-circle" src="/public/dashboard/assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                            <div class="w-100">
                                <h5 class="m-0 font-14">Erwin Brown</h5>
                                <span class="font-12 mb-0">UI Designer</span>
                            </div>
                        </div>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="d-flex">
                            <img class="d-flex me-2 rounded-circle" src="/public/dashboard/assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                            <div class="w-100">
                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                <span class="font-12 mb-0">Developer</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end Topbar -->

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Danh Sách Đăng Ký</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sinh Viên Đăng Ký</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Customers</a>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div>
                        </div> -->

                        <div class="table-responsive">
                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Customer</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Create Date</th>
                                        <th>Status</th>
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                        </td>
                                        <td>
                                            937-330-1634
                                        </td>
                                        <td>
                                            pauljfrnd@jourrapide.com
                                        </td>
                                        <td>
                                            New York
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-success-lighten">Active</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Bryan J. Luellen</a>
                                        </td>
                                        <td>
                                            215-302-3376
                                        </td>
                                        <td>
                                            bryuellen@dayrep.com
                                        </td>
                                        <td>
                                            New York
                                        </td>
                                        <td>
                                            09/12/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-success-lighten">Active</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Kathryn S. Collier</a>
                                        </td>
                                        <td>
                                            828-216-2190
                                        </td>
                                        <td>
                                            collier@jourrapide.com
                                        </td>
                                        <td>
                                            Canada
                                        </td>
                                        <td>
                                            06/30/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-lighten">Blocked</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck5">
                                                <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-1.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Timothy Kauper</a>
                                        </td>
                                        <td>
                                            (216) 75 612 706
                                        </td>
                                        <td>
                                            thykauper@rhyta.com
                                        </td>
                                        <td>
                                            Denmark
                                        </td>
                                        <td>
                                            09/08/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-lighten">Blocked</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck6">
                                                <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Zara Raws</a>
                                        </td>
                                        <td>
                                            (02) 75 150 655
                                        </td>
                                        <td>
                                            austin@dayrep.com
                                        </td>
                                        <td>
                                            Germany
                                        </td>
                                        <td>
                                            07/15/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-success-lighten">Active</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck7">
                                                <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Annette P. Kelsch</a>
                                        </td>
                                        <td>
                                            (+15) 73 483 758
                                        </td>
                                        <td>
                                            annette@email.net
                                        </td>
                                        <td>
                                            India
                                        </td>
                                        <td>
                                            09/05/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-success-lighten">Active</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck8">
                                                <label class="form-check-label" for="customCheck8">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-7.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Jenny C. Gero</a>
                                        </td>
                                        <td>
                                            078 7173 9261
                                        </td>
                                        <td>
                                            jennygero@teleworm.us
                                        </td>
                                        <td>
                                            Lesotho
                                        </td>
                                        <td>
                                            08/02/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-lighten">Blocked</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck9">
                                                <label class="form-check-label" for="customCheck9">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-8.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Edward Roseby</a>
                                        </td>
                                        <td>
                                            078 6013 3854
                                        </td>
                                        <td>
                                            edwardR@armyspy.com
                                        </td>
                                        <td>
                                            Monaco
                                        </td>
                                        <td>
                                            08/23/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-success-lighten">Active</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck10">
                                                <label class="form-check-label" for="customCheck10">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-9.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Anna Ciantar</a>
                                        </td>
                                        <td>
                                            (216) 76 298 896
                                        </td>
                                        <td>
                                            annac@hotmai.us
                                        </td>
                                        <td>
                                            Philippines
                                        </td>
                                        <td>
                                            05/06/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-success-lighten">Active</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck11">
                                                <label class="form-check-label" for="customCheck11">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-10.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Dean Smithies</a>
                                        </td>
                                        <td>
                                            077 6157 4248
                                        </td>
                                        <td>
                                            deanes@dayrep.com
                                        </td>
                                        <td>
                                            Singapore
                                        </td>
                                        <td>
                                            04/09/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-success-lighten">Active</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck12">
                                                <label class="form-check-label" for="customCheck12">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-1.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Labeeb Ghali</a>
                                        </td>
                                        <td>
                                            050 414 8778
                                        </td>
                                        <td>
                                            labebswad@teleworm.us
                                        </td>
                                        <td>
                                            United Kingdom
                                        </td>
                                        <td>
                                            06/19/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-success-lighten">Active</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck13">
                                                <label class="form-check-label" for="customCheck13">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/public/dashboard/assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">Rory Seekamp</a>
                                        </td>
                                        <td>
                                            078 5054 8877
                                        </td>
                                        <td>
                                            roryamp@dayrep.com
                                        </td>
                                        <td>
                                            United States
                                        </td>
                                        <td>
                                            03/24/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-lighten">Blocked</span>
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->

</div> <!-- content -->


<!------------------------------------------------------------------------------ Script JS -->
 <!-- bundle -->
 <script src="/public/dashboard/assets/js/vendor.min.js"></script>
<script src="/public/dashboard/assets/js/app.min.js"></script>

<!-- third party js -->
<script src="/public/dashboard/assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="/public/dashboard/assets/js/vendor/dataTables.bootstrap5.js"></script>
<script src="/public/dashboard/assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="/public/dashboard/assets/js/vendor/responsive.bootstrap5.min.js"></script>
<script src="/public/dashboard/assets/js/vendor/dataTables.checkboxes.min.js"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="/public/dashboard/assets/js/pages/demo.customers.js"></script>
<!-- end demo js-->


<?php View::__template()->__endSection(); ?>