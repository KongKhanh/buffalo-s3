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
                <!-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                        <li class="breadcrumb-item active">Projects List</li>
                    </ol>
                </div> -->
                <h4 class="page-title">Thông Tin Trường</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row mb-2">
        <div class="col-sm-4">
            <a href="/dashboard/infor/create" class="btn btn-danger mb-3"><i class="mdi mdi-plus"></i>THÊM MỚI</a>
        </div>
    </div> 
    <!-- end row-->

    <form method="POST" id="formDelete">
        <input type="hidden" name="post_id" id="post_id">
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
            foreach($postList as $post){

                $statusActive = $post["post_status"] == "published" ? "checked" : "";

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
                                        <a href="/dashboard/infor/update/{$post['post_id']}" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Chỉnh sửa</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item btnDeletePost" data-id="{$post['post_id']}"><i class="mdi mdi-delete me-1"></i>Xóa</a>
                                    </div>
                                </div>
                                <!-- project title-->
                                <h4 class="mt-0">
                                    <a href="{$post['link_url']}" class="text-title" target="_blank">{$post['post_title']}</a>
                                </h4>
                                <p class="text-muted font-13 mb-3">
                                    <!-- {$news['news_main_content']}...<a href="javascript:void(0);" class="fw-bold text-muted">view more</a> -->
                                </p>
                                <!-- project detail-->
                                <p class="mb-1">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <!-- <i class="mdi mdi-format-list-bulleted-type text-muted"></i> -->
                                        <i class="mdi mdi-eye text-muted"></i>
                                        <b>{$post['post_num_of_view']}</b> Lượt xem
                                    </span>
                                    <!-- <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>741</b> Comments
                                    </span> -->
                                </p>
                                <div class="d-flex">
                                    <span class="me-2">
                                        Trạng thái: 
                                    </span>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input post_status" data-id="{$post['post_id']}" id="customSwitch_{$post['post_id']}" {$statusActive}>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <!-- <li class="list-group-item p-3">    
                                    <p class="mb-2 fw-bold">Progress <span class="float-end">100%</span></p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        </div>
                                    </div>
                                </li> -->
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

    /**
     * Task: update status of news
     */
    $('.post_status').change(function() {

        var endPoint = `/dashboard/infor/update/${$(this).attr("data-id")}`;

        function __requestUpdate(post_status) { 

            $.ajax({
                method: 'POST',
                url: endPoint,
                data: {
                    "post_status": post_status
                }
            })
            .done(function(res) {

                if(res) {

                    cuteAlert({
                        type: "success",
                        title: "Thông báo",
                        message: "Cập nhật dữ liệu thành công",
                        buttonText: "Okay"
                    });
                }
            })
            .fail(function(res) {

                console.log(res);
            });
        }

        if(this.checked) {

            __requestUpdate("published");
        }
        else {

            __requestUpdate("hidden");
        }
    });        

    /**
     * Task: delete a news
     */
    $('.btnDeletePost').click(function() {
        cuteAlert({
            type: "question",
            title: "Bạn có muốn xóa không",
            message: "",
            confirmText: "Đồng ý",
            cancelText: "Hủy"
        })
        .then((e) => {

            if(e) {

                $('#post_id').attr('value', $(this).attr('data-id'));
                $('#formDelete').attr('action', '/dashboard/infor/delete');
                
                $('#formDelete').submit();
            }
        });
    });

</script>

<?php View::__template()->__endSection(); ?>