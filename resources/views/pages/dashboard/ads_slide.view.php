<?php

    View::__template()->__extends("layouts/dashboard/app.dashboard.view.php");

    View::__template()->__startSection("content");
    
?>

<!------------------------------------------------------------------------------ Script CSS -->
<!-- third party css -->
<link href="/public/dashboard/assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
<link href="/public/dashboard/assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
<!-- third party css end -->

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
                        <li class="breadcrumb-item active">Danh Sách trình chiếu/li>
                    </ol>
                </div>
                <h4 class="page-title">Danh Sách trình chiếu</h4>
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

                    <form method="POST" id="formDelete">
                        <input type="hidden" name="ads_slide_id" id="ads_slide_id">
                    </form>

                    <?php 
    
                        if(Session::has("ads_slide_infor")) {

                            $ads_slide_infor = Session::get("ads_slide_infor");

                            echo <<<HTML
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {$ads_slide_infor["message"]}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            HTML;
                        }
                    ?>

                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="/dashboard/ads-slide/create" class="btn btn-danger mb-3"><i class="mdi mdi-plus"></i>THÊM MỚI</a>
                        </div>
                    </div>

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
                                    <th>Tiêu đề trình Chiếu</th>
                                    <th>Hình ảnh trình chiếu</th>
                                    <th>Link liên kết</th>
                                    <th>Ngày tạo</th>
                                    <th>Trạng thái</th>
                                    <th style="width: 75px;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    if(isset($AdsSlideList) && is_array($AdsSlideList)) {

                                        foreach($AdsSlideList as $AdsSlide) {

                                            $statusActive = $AdsSlide["ads_slide_status"] == "published" ? "checked" : "";

                                            $AdsSlide["ads_slide_created_at"] = date_format(date_create($AdsSlide["ads_slide_created_at"]), "d-m-Y");

                                            echo <<<HTML
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user text-wrap">
                                                        <a href="javascript:void(0);" class="text-body fw-semibold">{$AdsSlide["ads_slide_title"]}</a>
                                                    </td>
                                                    <td>
                                                        <img src="{$AdsSlide['ads_slide_img_link']}" class="" style="width:100px;"/>     
                                                    </td>
                                                    <td class="text-wrap">
                                                        <a href="{$AdsSlide['ads_slide_link_to']}" class="desc-slide__item">{$AdsSlide['ads_slide_link_to']}</a>
                                                    </td>
                                                    <td>
                                                        {$AdsSlide["ads_slide_created_at"]}
                                                    </td>
                                                     <td>
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input ads_slide_status" data-id="{$AdsSlide['ads_slide_id']}" id="customSwitch_{$AdsSlide['ads_slide_id']}" {$statusActive}>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="/dashboard/ads-slide/update/{$AdsSlide['ads_slide_id']}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon btnDeleteAS" data-id="{$AdsSlide['ads_slide_id']}"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                            HTML;
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    
</div> 
<!-- container -->



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
<script src="/public/dashboard/assets/js/dataTable/demo.customers.js"></script>
<!-- end demo js-->

<script>

    /**
     * Task: update status of majors
     */
    $('.ads_slide_status').change(function() {

        var endPoint = `/dashboard/ads-slide/update/${$(this).attr("data-id")}`;

        function __requestUpdate(ads_slide_status) { 

            $.ajax({
                method: 'POST',
                url: endPoint,
                data: {
                    "ads_slide_status": ads_slide_status
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
     * Task: delete majors by ID
     */
    $('.btnDeleteAS').click(function() {
        cuteAlert({
            type: "question",
            title: "Bạn có muốn xóa không",
            message: "",
            confirmText: "Đồng ý",
            cancelText: "Hủy"
        })
        .then((e) => {

            if(e) {

                $('#ads_slide_id').attr('value', $(this).attr('data-id'));
                $('#formDelete').attr('action', '/dashboard/ads-slide/delete');
                $('#formDelete').submit();
            }
        });
    });
</script>

<?php View::__template()->__endSection(); ?>