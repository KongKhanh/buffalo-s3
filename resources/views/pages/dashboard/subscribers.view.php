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
                <h4 class="page-title">Sinh Viên Đăng Ký Online</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <form method="POST" id="formDelete">
                        <input type="hidden" name="scb_id" id="scb_id">
                </form>

                    <?php
                        if (Session::has("res_subscriber_infor")) {

                            $res_subscriber_infor = Session::get("res_subscriber_infor");

                            echo <<<HTML
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {$res_subscriber_infor["message"]}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            HTML;
                        }
                    ?>
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
                                    <th>Họ & Tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày đăng ký</th>
                                    <th>Trạng thái</th>
                                    <th style="width: 75px">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($subscribers as $subscriber) {

                                    $subscriber_address     = Str::limit($subscriber["subscriber_address"], 15, "...");
                                    $subscriber_status = $subscriber["subscriber_status"] == "new" ? "checked" : "";
                                    echo <<<HTML
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td class="table-user">
                                                    <!-- <img src="/public/dashboard/assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle"> -->
                                                    <a href="javascript:void(0);" class="text-body fw-semibold">{$subscriber["subscriber_name"]}</a>
                                                </td>
                                                <td>
                                                    {$subscriber["subscriber_phone"]}
                                                </td>
                                                <td>
                                                    {$subscriber["subscriber_email"]}
                                                </td>
                                                <td>
                                                    {$subscriber_address}
                                                </td>
                                                <td>
                                                    {$subscriber["subscriber_created_at"]}
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input subscriber_status" data-id="{$subscriber['subscriber_id']}" id="customSwitch_{$subscriber['subscriber_id']}" {$subscriber_status}>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="/dashboard/subscriber/update/{$subscriber['subscriber_id']}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" data-id="{$subscriber['subscriber_id']}" class="action-icon btnDeleteSubscriber"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        HTML;
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
<!-- <script src="/public/dashboard/assets/js/pages/demo.customers.js"></script> -->
<script src="/public/dashboard/assets/js/dataTable/demo.customers.js"></script>
<!-- end demo js-->
<script>
    /**
     * Task: update status of majors
     */
    $('.subscriber_status').change(function() {

        var endPoint = `/dashboard/subscriber/update/${$(this).attr("data-id")}`;

        function __requestUpdate(subscriber_status) {

            $.ajax({
                    method: 'POST',
                    url: endPoint,
                    data: {
                        "subscriber_status": subscriber_status
                    }
                })
                .done(function(res) {
                    if (res) {

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

        if (this.checked) {

            __requestUpdate("new");
        } else {

            __requestUpdate("approved");
        }
    });
    $('.btnDeleteSubscriber').click(function() {
        cuteAlert({
            type: "question",
            title: "Bạn có muốn xóa không",
            message: "",
            confirmText: "Đồng ý",
            cancelText: "Hủy"
        })
        .then((e) => {

            if(e) {

                $('#scb_id').attr('value', $(this).attr('data-id'));
                $('#formDelete').attr('action', '/dashboard/subscriber/delete');
                $('#formDelete').submit();
            }
        });
    });

</script>


<?php View::__template()->__endSection(); ?>
