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
                        <li class="breadcrumb-item active">Danh Sách Đăng Ký</li>
                    </ol>
                </div>
                <h4 class="page-title">Danh Sách Các Ngành Đạo Tạo</h4>
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
                        <input type="hidden" name="mjr_id" id="mjr_id">
                    </form>

                    <?php 
    
                        if(Session::has("res_majors_cate_info")) {

                            $res_majors_cate_info = Session::get("res_majors_cate_info");

                            echo <<<HTML
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {$res_majors_cate_info["message"]}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            HTML;
                        }
                    ?>

                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="/dashboard/majors/create" class="btn btn-danger mb-3"><i class="mdi mdi-plus"></i>THÊM MỚI</a>
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
                                    <th>Tên ngành</th>
                                    <th>Mã ngành</th>
                                    <th>Hệ đào tạo</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày tạo</th>
                                    <th>Trạng thái</th>
                                    <th style="width: 75px;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    if(isset($majors) && is_array($majors)) {

                                        foreach($majors as $majors_item) {

                                            $statusActive = $majors_item["mjr_status"] == "published" ? "checked" : "";

                                            $majors_item["mjr_created_at"] = date_format(date_create($majors_item["mjr_created_at"]), "d-m-Y");

                                            echo <<<HTML
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <a href="javascript:void(0);" class="text-body fw-semibold">{$majors_item["mjr_name"]}</a>
                                                    </td>
                                                    <td>
                                                        {$majors_item["mjr_code"]}
                                                    </td>
                                                    <td>
                                                        {$majors_item["lot_name"]}
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        {$majors_item["mjr_created_at"]}
                                                    </td>
                                                     <td>
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input mjr_status" data-id="{$majors_item['mjr_id']}" id="customSwitch_{$majors_item['mjr_id']}}" {$statusActive}>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="/dashboard/majors/update/{$majors_item['mjr_id']}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon btnDeleteMajors" data-id="{$majors_item['mjr_id']}"> <i class="mdi mdi-delete"></i></a>
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
<script src="/public/dashboard/assets/js/pages/demo.customers.js"></script>
<!-- end demo js-->

<script>

    /**
     * Task: update status of majors
     */
    $('.mjr_status').change(function() {

        var endPoint = `/dashboard/majors/update/${$(this).attr("data-id")}`;

        function __requestUpdate(mjr_status) { 

            $.ajax({
                method: 'POST',
                url: endPoint,
                data: {
                    "mjr_status": mjr_status
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
    $('.btnDeleteMajors').click(function() {
        cuteAlert({
            type: "question",
            title: "Bạn có muốn xóa không",
            message: "",
            confirmText: "Đồng ý",
            cancelText: "Hủy"
        })
        .then((e) => {

            if(e) {

                $('#mjr_id').attr('value', $(this).attr('data-id'));
                $('#formDelete').attr('action', '/dashboard/majors/delete');
                
                $('#formDelete').submit();
            }
        });
    });
</script>

<?php View::__template()->__endSection(); ?>