<?php

View::__template()->__extends("layouts/dashboard/app.dashboard.view.php");

View::__template()->__startSection("content");
?>

<!------------------------------------------------------------------------------ Script CSS -->
<!-- third party css -->
<link href="/public/dashboard/assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
<link href="/public/dashboard/assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
<!-- third party css end -->
<style>

    .text-content{
        width:400px;
    }
    .extend-text:hover{
        cursor: pointer;
    }

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0px;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative; /* Stay in place */
  left:100px;
  margin: auto;
  background-color: #fefefe;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
  border-radius: 0.5em;

}

/* The Close Button */
.close{
    color: #727cf5;
    float: right;
    font-size: 14px;
    font-weight: bold;
    padding:5px;
    border:1px solid #CCCC;
    box-shadow: 2px 2px 2px 0px #CCCC;
    border-radius: 0.5em;
}

.close:hover,
.close:focus {
  color: #fa5c7c;
  text-decoration: none;
  cursor: pointer;
}
</style>


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
                <h4 class="page-title">Sinh Viên Đăng Ký Tư Vấn</h4>
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
                        if (Session::has("res_Contactconsult_infor")) {

                            $res_Contactconsult_infor = Session::get("res_Contactconsult_infor");

                            echo <<<HTML
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {$res_Contactconsult_infor["message"]}
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
                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div><a class="text-cc"></a></div>
                        <div class="close-x"><a class="close">Đóng</a></div>
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
                                    <th>Họ & Tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Nội dung</th>
                                    <th>Ngày đăng ký</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($ContactconsultLists as $Contactconsult) {
                                    
                                    $Contactconsult_status = $Contactconsult["cc_status"] == "approved" ? "checked" : "";

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
                                                    <a href="javascript:void(0);" class="text-body fw-semibold">{$Contactconsult["cc_name"]}</a>
                                                </td>
                                                <td>
                                                    {$Contactconsult["cc_phone"]}
                                                </td>
                                                <td class="text-note">
                                                        <p class="text-content d-inline-block text-truncate "> {$Contactconsult["cc_note"]}</p>
                                                        <div class="extend-text text-primary" data-id="{$Contactconsult['cc_id']}"> Xem chi tiết </div>
                                                </td>
                                                <td>
                                                    {$Contactconsult["cc_created_at"]}
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input Contactconsult_status" data-id="{$Contactconsult['cc_id']}" id="customSwitch_{$Contactconsult['cc_id']}" {$Contactconsult_status}>
                                                    </div>
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
    $('.Contactconsult_status').change(function() {

        var endPoint = `/dashboard/contact-consult/update/${$(this).attr("data-id")}`;

        function __requestUpdate(Contactconsult_status) {

            $.ajax({
                    method: 'POST',
                    url: endPoint,
                    data: {
                        "cc_status": Contactconsult_status
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

            __requestUpdate("approved");
        } else {

            __requestUpdate("published");
        }
    });
    var modal = $('#myModal');
    $('.extend-text').click(function() {
        var endPoint = `/dashboard/contact-consult/content/${$(this).attr("data-id")}`;
        $.ajax({
                url: endPoint,
                headers: {
                    'Content-Type':'application/json'
                },
                method: "GET",
            })
            .done(function(res) {
                console.log(res.CcbyID['cc_note']);

               $('.text-cc').html(`<h2> Thông tin chi tiết </h2>
               <div class="text-danger"> Nội dung cần tư vấn : <span style="color:#343a40; font-size:16px;"> ${res.CcbyID['cc_note']}<span></div>
               <div class="text-danger py-2"> Số điện thoại người đăng ký : <span style="color:#343a40; font-size:16px"> ${res.CcbyID['cc_phone']}<span></div>
               `)
        })

        modal.css("display","block");
});
    $('.close').click(function(){

        modal.css("display","none");
    })

</script>


<?php View::__template()->__endSection(); ?>
