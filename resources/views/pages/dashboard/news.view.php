<?php

    View::__template()->__extends("layouts/dashboard/app.dashboard.view.php");

    View::__template()->__startSection("content");
?>

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                <li class="breadcrumb-item active">Projects List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Projects</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row mb-2">
                <div class="col-sm-4">
                    <a href="apps-projects-add.html" class="btn btn-danger btn-rounded mb-3"><i class="mdi mdi-plus"></i> Create Project</a>
                </div>
                <div class="col-sm-8">
                    <div class="text-sm-end">
                        <div class="btn-group mb-3">
                            <button type="button" class="btn btn-primary">All</button>
                        </div>
                        <div class="btn-group mb-3 ms-1">
                            <button type="button" class="btn btn-light">Ongoing</button>
                            <button type="button" class="btn btn-light">Finished</button>
                        </div>
                        <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                            <button type="button" class="btn btn-secondary"><i class="dripicons-view-apps"></i></button>
                        </div>
                        <div class="btn-group mb-3 d-none d-sm-inline-block">
                            <button type="button" class="btn btn-link text-muted"><i class="dripicons-checklist"></i></button>
                        </div>
                    </div>
                </div><!-- end col-->
            </div> 
            <!-- end row-->

            <div class="row">
                <div class="col-lg-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">
                        <div class="card-body">
                            <div class="dropdown card-widgets">
                                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="dripicons-dots-3"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                </div>
                            </div>
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="apps-projects-details.html" class="text-title">App design and development</a>
                            </h4>
                            <div class="badge bg-success mb-3">Finished</div>

                            <p class="text-muted font-13 mb-3">With supporting text below as a natural lead-in to additional contenposuere erat a ante...<a href="javascript:void(0);" class="fw-bold text-muted">view more</a>
                            </p>

                            <!-- project detail-->
                            <p class="mb-1">
                                <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                    <b>21</b> Tasks
                                </span>
                                <span class="text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                    <b>741</b> Comments
                                </span>
                            </p>
                            <div id="tooltip-container">
                                <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>
                                <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                                    +7 more
                                </a>
                            </div>
                        </div> <!-- end card-body-->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <!-- project progress-->
                                <p class="mb-2 fw-bold">Progress <span class="float-end">100%</span></p>
                                <div class="progress progress-sm">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                    </div><!-- /.progress-bar -->
                                </div><!-- /.progress -->
                            </li>
                        </ul>
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-md-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">
                        <div class="card-body">
                            <div class="dropdown card-widgets">
                                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="dripicons-dots-3"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                </div>
                            </div>
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="apps-projects-details.html" class="text-title">Coffee detail page - Main Page</a>
                            </h4>
                            <div class="badge bg-secondary text-light mb-3">Ongoing</div>

                            <p class="text-muted font-13 mb-3">This card has supporting text below as a natural lead-in to additional content is a little bit longer...<a href="javascript:void(0);" class="fw-bold text-muted">view more</a>
                            </p>

                            <!-- project detail-->
                            <p class="mb-1">
                                <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                    <b>81</b> Tasks
                                </span>
                                <span class="text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                    <b>103</b> Comments
                                </span>
                            </p>
                            <div id="tooltip-container1">
                                <a href="javascript:void(0);" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>
                                <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                                    +3 more
                                </a>
                            </div>
                        </div> <!-- end card-body-->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <!-- project progress-->
                                <p class="mb-2 fw-bold">Progress <span class="float-end">28%</span></p>
                                <div class="progress progress-sm">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;">
                                    </div><!-- /.progress-bar -->
                                </div><!-- /.progress -->
                            </li>
                        </ul>
                    </div> <!-- end card-->
                </div> <!-- end col -->
                <div class="col-md-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">
                        <div class="card-body">
                            <div class="dropdown card-widgets">
                                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="dripicons-dots-3"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                </div>
                            </div>
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="apps-projects-details.html" class="text-title">Poster illustation design</a>
                            </h4>
                            <div class="badge bg-secondary text-light mb-3">Ongoing</div>

                            <p class="text-muted font-13 mb-3">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid...<a href="javascript:void(0);" class="fw-bold text-muted">view more</a>
                            </p>

                            <!-- project detail-->
                            <p class="mb-1">
                                <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                    <b>12</b> Tasks
                                </span>
                                <span class="text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                    <b>482</b> Comments
                                </span>
                            </p>
                            <div id="tooltip-container2">
                                <a href="javascript:void(0);" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>
                            </div>
                        </div> <!-- end card-body-->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <!-- project progress-->
                                <p class="mb-2 fw-bold">Progress <span class="float-end">63%</span></p>
                                <div class="progress progress-sm">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;">
                                    </div><!-- /.progress-bar -->
                                </div><!-- /.progress -->
                            </li>
                        </ul>
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-md-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">
                        <div class="card-body">
                            <div class="dropdown card-widgets">
                                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="dripicons-dots-3"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                </div>
                            </div>
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="apps-projects-details.html" class="text-title">Drinking bottle graphics </a>
                            </h4>
                            <div class="badge bg-success mb-3">Finished</div>

                            <p class="text-muted font-13 mb-3">Some quick example text to build on the card title and make up the bulk of the card's content...<a href="javascript:void(0);" class="fw-bold text-muted">view more</a>
                            </p>

                            <!-- project detail-->
                            <p class="mb-1">
                                <span class="pe-2 mb-2 d-inline-block text-nowrap">
                                    <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                    <b>50</b> Tasks
                                </span>
                                <span class="text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                    <b>208</b> Comments
                                </span>
                            </p>
                            <div id="tooltip-container3">
                                <a href="javascript:void(0);" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>
                                <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                                    +2 more
                                </a>
                            </div>
                        </div> <!-- end card-body-->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <!-- project progress-->
                                <p class="mb-2 fw-bold">Progress <span class="float-end">100%</span></p>
                                <div class="progress progress-sm">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                    </div><!-- /.progress-bar -->
                                </div><!-- /.progress -->
                            </li>
                        </ul>
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-md-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">
                        <!-- project-thumbnail -->
                        <img class="card-img-top" src="/public/dashboard/assets/images/projects/project-1.jpg" alt="project image cap">
                        <div class="card-img-overlay">
                            <div class="badge bg-secondary text-light p-1">Ongoing</div>
                        </div>

                        <div class="card-body position-relative">
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="apps-projects-details.html" class="text-title">Company logo design</a>
                            </h4>

                            <!-- project detail-->
                            <p class="mb-3">
                                <span class="pe-2 text-nowrap">
                                    <i class="mdi mdi-format-list-bulleted-type"></i>
                                    <b>3</b> Tasks
                                </span>
                                <span class="text-nowrap">
                                    <i class="mdi mdi-comment-multiple-outline"></i>
                                    <b>104</b> Comments
                                </span>
                            </p>
                            <div class="mb-3" id="tooltip-container4">
                                <a href="javascript:void(0);" data-bs-container="#tooltip-container4" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container4" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container4" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>
                            </div>

                            <!-- project progress-->
                            <p class="mb-2 fw-bold">Progress <span class="float-end">45%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-md-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">
                        <!-- project-thumbnail -->
                        <img class="card-img-top" src="/public/dashboard/assets/images/projects/project-2.jpg" alt="project image cap">
                        <div class="card-img-overlay">
                            <div class="badge bg-success p-1">Finished</div>
                        </div>

                        <div class="card-body position-relative">
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="apps-projects-details.html" class="text-title">Landing page design - Home</a>
                            </h4>

                            <!-- project detail-->
                            <p class="mb-3">
                                <span class="pe-2 text-nowrap">
                                    <i class="mdi mdi-format-list-bulleted-type"></i>
                                    <b>11</b> Tasks
                                </span>
                                <span class="text-nowrap">
                                    <i class="mdi mdi-comment-multiple-outline"></i>
                                    <b>254</b> Comments
                                </span>
                            </p>
                            <div class="mb-3" id="tooltip-container5">
                                <a href="javascript:void(0);" data-bs-container="#tooltip-container5" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container5" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container5" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>
                                <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                                    +2 more
                                </a>
                            </div>

                            <!-- project progress-->
                            <p class="mb-2 fw-bold">Progress <span class="float-end">100%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-md-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">
                        <!-- project-thumbnail -->
                        <img class="card-img-top" src="/public/dashboard/assets/images/projects/project-3.jpg" alt="project image cap">
                        <div class="card-img-overlay">
                            <div class="badge bg-secondary text-light p-1">Ongoing</div>
                        </div>

                        <div class="card-body position-relative">
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="apps-projects-details.html" class="text-title">Product page redesign</a>
                            </h4>

                            <!-- project detail-->
                            <p class="mb-3">
                                <span class="pe-2 text-nowrap">
                                    <i class="mdi mdi-format-list-bulleted-type"></i>
                                    <b>21</b> Tasks
                                </span>
                                <span class="text-nowrap">
                                    <i class="mdi mdi-comment-multiple-outline"></i>
                                    <b>668</b> Comments
                                </span>
                            </p>
                            <div class="mb-3" id="tooltip-container6">
                                <a href="javascript:void(0);" data-bs-container="#tooltip-container6" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container6" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container6" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>
                                <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                                    +5 more
                                </a>
                            </div>

                            <!-- project progress-->
                            <p class="mb-2 fw-bold">Progress <span class="float-end">71%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-md-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">
                        <!-- project-thumbnail -->
                        <img class="card-img-top" src="/public/dashboard/assets/images/projects/project-4.jpg" alt="project image cap">
                        <div class="card-img-overlay">
                            <div class="badge bg-secondary text-light p-1">Ongoing</div>
                        </div>

                        <div class="card-body position-relative">
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="apps-projects-details.html" class="text-title">Coffee detail page - Main Page</a>
                            </h4>

                            <!-- project detail-->
                            <p class="mb-3">
                                <span class="pe-2 text-nowrap">
                                    <i class="mdi mdi-format-list-bulleted-type"></i>
                                    <b>18</b> Tasks
                                </span>
                                <span class="text-nowrap">
                                    <i class="mdi mdi-comment-multiple-outline"></i>
                                    <b>259</b> Comments
                                </span>
                            </p>
                            <div class="mb-3" id="tooltip-container7">
                                <a href="javascript:void(0);" data-bs-container="#tooltip-container7" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container7" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                    <img src="/public/dashboard/assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>
                            </div>

                            <!-- project progress-->
                            <p class="mb-2 fw-bold">Progress <span class="float-end">52%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->
            
        </div> <!-- container -->
    </div> <!-- content -->

<!-- bundle -->
<script src="/public/dashboard/assets/js/vendor.min.js"></script>
<script src="/public/dashboard/assets/js/app.min.js"></script>

<?php View::__template()->__endSection(); ?>