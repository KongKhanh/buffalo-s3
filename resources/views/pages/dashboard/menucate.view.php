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
                <!-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                        <li class="breadcrumb-item active">Danh Sách Đăng Ký</li>
                    </ol>
                </div> -->
                <h4 class="page-title">Danh Sách Danh Mục</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="/dashboard/menu-cate/create/type/A001" class="btn btn-danger mb-3"><i class="mdi mdi-plus"></i>THÊM MỚI</a>
                        </div>
                    </div> 

                    <form method="POST" id="formDelete">
                        <input type="hidden" name="mc_id" id="mc_id">
                    </form>

                    <?php 
    
                        if(Session::has("res_menu_cate_info")) {

                            $res_menu_cate_info = Session::get("res_menu_cate_info");

                            echo <<<HTML
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {$res_menu_cate_info["message"]}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            HTML;
                        }
                    ?>

                    <div class="accordion custom-accordion" id="custom-accordion-one">
                        <?php 
                            foreach($menu_cate as $menu_cate_item) {

                                $renderSubACate  = "";

                                foreach($menu_cate_item['suba_cate'] as $suba_cate_item) {

                                    $statusActive = $suba_cate_item["mc_status"] == "published" ? "checked" : "";

                                    $renderSubACate .= 
                                        <<<HTML
                                            <tr>
                                                <td class="table-user">
                                                    <a href="javascript:void(0);" class="text-body fw-semibold">
                                                        {$suba_cate_item["mc_title"]}
                                                    </a>
                                                </td>
                                                <td>
                                                    {$suba_cate_item["link_url"]}
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input mc_status" data-id="{$suba_cate_item['mc_id']}" id="customSwitch_{$suba_cate_item['mc_id']}" {$statusActive}>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="/dashboard/menu-cate/update/{$suba_cate_item['mc_id']}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon btnDeleteMenuCate" data-id="{$suba_cate_item['mc_id']}"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        HTML;
                                }

                                $statusActive001 = $menu_cate_item["mc_status"] == "published" ? "checked" : "";
                            
                                echo <<<HTML
                                    <div class="card mb-0">
                                        <div class="card-header" id="heading_{$menu_cate_item['mc_id']}">
                                            <h5 class="m-0">
                                                <a class="custom-accordion-title d-block py-1"
                                                    data-bs-toggle="collapse" href="#collapse_{$menu_cate_item['mc_id']}"
                                                    aria-expanded="true" aria-controls="collapse_{$menu_cate_item['mc_id']}">
                                                    {$menu_cate_item["mc_title"]}
                                                    <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                                    <a href="/dashboard/menu-cate/update/{$menu_cate_item['mc_id']}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon btnDeleteMenuCate" data-id="{$menu_cate_item['mc_id']}"> <i class="mdi mdi-delete"></i></a>
                                                </a>
                                                <span class="form-check form-switch" style="position:absolute; top:18px; right:50px">
                                                        <input type="checkbox" class="form-check-input mc_status" data-id="{$menu_cate_item['mc_id']}" id="customSwitch_{$menu_cate_item['mc_id']}" {$statusActive001}>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="collapse_{$menu_cate_item['mc_id']}" class="collapse" aria-labelledby="heading{$menu_cate_item['mc_id']}" data-bs-parent="#custom-accordion-one">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-centered table-striped dt-responsive nowrap w-100">
                                                        <thead>
                                                            <tr>
                                                                <th>Tên danh mục</th>
                                                                <th>Link URL</th>
                                                                <th>Trạng thái</th>
                                                                <th style="width: 75px;">Thao tác</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {$renderSubACate}
                                                        </tbody>
                                                    </table>
                                                    <div class="mb-2">
                                                        <div class="col-sm-4">
                                                            <a href="/dashboard/menu-cate/create/type/A002-{$menu_cate_item['mc_id']}" class="btn btn-danger mb-3"><i class="mdi mdi-plus"></i>THÊM MỚI</a>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                HTML;
                            }
                        ?>
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
     * Task: update status of menu categories
     */
    $('.mc_status').change(function() {

        var endPoint = `/dashboard/menu-cate/update/${$(this).attr("data-id")}`;

        function __requestUpdate(mc_status) { 

            $.ajax({
                method: 'POST',
                url: endPoint,
                data: {
                    "mc_status": mc_status
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
     * Task: delete menu categories by ID
     */
    $('.btnDeleteMenuCate').click(function() {
        cuteAlert({
            type: "question",
            title: "Bạn có muốn xóa không",
            message: "",
            confirmText: "Đồng ý",
            cancelText: "Hủy"
        })
        .then((e) => {

            if(e) {

                $('#mc_id').attr('value', $(this).attr('data-id'));
                $('#formDelete').attr('action', '/dashboard/menu-cate/delete');
                
                $('#formDelete').submit();
            }
        });
    });

</script>


<?php View::__template()->__endSection(); ?>