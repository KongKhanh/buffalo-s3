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
                <h4 class="page-title">Danh Sách Thể Loại Tin Tức</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <form method="POST" id="formDelete">
                        <input type="hidden" name="lot_id" id="lot_id">
                    </form>

                    <?php 
    
                        if(Session::has("res_level_of_training_infor")) {

                            $res_level_of_training_infor = Session::get("res_level_of_training_infor");

                            echo <<<HTML
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {$res_level_of_training_infor["message"]}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            HTML;
                        }
                    ?>
                    
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="/dashboard/level-of-training/create" class="btn btn-danger mb-3"><i class="mdi mdi-plus"></i>THÊM MỚI</a>
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
                                    <th>Tên hệ đào tạo</th>
                                    <th>Mã hệ đào tạo</th>
                                    <th>Hệ đào tạo</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày tạo</th>
                                    <th>Trạng thái</th>
                                    <th style="width: 75px;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    if(isset($levelOfTraining) && is_array($levelOfTraining)) {

                                        foreach($levelOfTraining as $levelOfTrainingItem) {

                                            $statusActive = $levelOfTrainingItem["lot_status"] == "published" ? "checked" : "";

                                            echo <<<HTML
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <a href="javascript:void(0);" class="text-body fw-semibold">{$levelOfTrainingItem["lot_name"]}</a>
                                                    </td>
                                                    <td>
                                                        {$levelOfTrainingItem["lot_code"]}
                                                    </td>
                                                    <td>
                                                        AAAA0001
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        01/01/1985
                                                    </td>
                                                     <td>
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input lot_status" data-id="{$levelOfTrainingItem['lot_id']}" id="customSwitch_" {$statusActive}>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="/dashboard/level-of-training/update/{$levelOfTrainingItem['lot_id']}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon btnDeleteLeveOfTraining" data-id="{$levelOfTrainingItem['lot_id']}"> <i class="mdi mdi-delete"></i></a>
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
    $('.lot_status').change(function() {

        var endPoint = `/dashboard/level-of-training/update/${$(this).attr("data-id")}`;

        function __requestUpdate(lot_status) { 

            $.ajax({
                method: 'POST',
                url: endPoint,
                data: {
                    "lot_status": lot_status
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
    $('.btnDeleteLeveOfTraining').click(function() {
        cuteAlert({
            type: "question",
            title: "Bạn có muốn xóa không",
            message: "",
            confirmText: "Đồng ý",
            cancelText: "Hủy"
        })
        .then((e) => {

            if(e) {

                $('#lot_id').attr('value', $(this).attr('data-id'));
                $('#formDelete').attr('action', '/dashboard/level-of-training/delete');
                
                $('#formDelete').submit();
            }
        });
    });
</script>

<?php View::__template()->__endSection(); ?>