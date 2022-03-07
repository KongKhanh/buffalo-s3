<?php

    View::__template()->__extends("layouts/dashboard/app.dashboard.view.php");

    View::__template()->__startSection("content");
?>

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
                <h4 class="page-title">TIN TỨC - SỰ KIỆN</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row mb-2">
        <div class="col-sm-4">
            <a href="/dashboard/news/create" class="btn btn-danger mb-3"><i class="mdi mdi-plus"></i>THÊM MỚI</a>
        </div>
        <!-- <div class="col-sm-8">
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
        </div> -->
    </div> 
    <!-- end row-->

    <form method="POST" id="formDelete">
        <input type="hidden" name="news_id" id="news_id">
    </form>

    <?php 
    
        if(Session::has("res_news_info")) {

            $res_news_info = Session::get("res_news_info");

            echo <<<HTML
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {$res_news_info["message"]}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            HTML;
        }
    ?>

    <div class="row">
        <?php 
            foreach($newsList as $news){
                echo <<<HTML
                    <div class="col-lg-6 col-xxl-3">
                        <div class="card d-block">
                            <div class="card-body">
                                <div class="dropdown card-widgets">
                                    <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="dripicons-dots-3"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="/dashboard/news/update/{$news['news_id']}" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Chỉnh sửa</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item btnDeleteNews" data-id="{$news['news_id']}"><i class="mdi mdi-delete me-1"></i>Xóa</a>
                                        <!-- item-->
                                        <!-- <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a> -->
                                        <!-- item -->
                                        <!-- <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a> -->
                                    </div>
                                </div>
                                <!-- project title-->
                                <h4 class="mt-0">
                                    <a href="apps-projects-details.html" class="text-title">{$news['news_title']}</a>
                                </h4>
                                <div class="badge bg-success mb-3">Finished</div>
                                <p class="text-muted font-13 mb-3">
                                    <!-- {$news['news_main_content']}...<a href="javascript:void(0);" class="fw-bold text-muted">view more</a> -->
                                </p>
                                <!-- project detail-->
                                <p class="mb-1">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <!-- <i class="mdi mdi-format-list-bulleted-type text-muted"></i> -->
                                        <i class="mdi mdi-eye text-muted"></i>
                                        <b>{$news['news_num_of_view']}</b> Lượt xem
                                    </span>
                                    <!-- <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>741</b> Comments
                                    </span> -->
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item p-3">    
                                    <p class="mb-2 fw-bold">Progress <span class="float-end">100%</span></p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> 
                    </div>
                HTML;
            }
        ?>
    </div>
</div> 
<!-- container -->

<!-- bundle -->
<script src="/public/dashboard/assets/js/vendor.min.js"></script>
<script src="/public/dashboard/assets/js/app.min.js"></script>

<script>
    $('.btnDeleteNews').click(function() {
        cuteAlert({
            type: "question",
            title: "Bạn có muốn xóa không",
            message: "",
            confirmText: "Đồng ý",
            cancelText: "Hủy"
        })
        .then((e) => {

            if(e) {

                $('#news_id').attr('value', $(this).attr('data-id'));
                $('#formDelete').attr('action', '/dashboard/news/delete');
                
                $('#formDelete').submit();
            }
        });
    });
</script>

<?php View::__template()->__endSection(); ?>