<?php

    View::__template()->__extends("layouts/dashboard/app.dashboard.view.php");

    View::__template()->__startSection("content");
?>

<script src="/public/dashboard/plugins/ckeditor/ckeditor.js"></script>


<!-- Start Content-->
<div class="container-fluid">

    <!-- Form row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">FORM NỘI DUNG</h4>
                    <p class="text-muted font-14">
                    <?php 
                            if(Session::has("ui_bg_infor")) {
                                $ui_bg_infor = Session::get("ui_bg_infor");
                                echo <<<HTML
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {$ui_bg_infor["message"]}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                HTML;
                            }
                        ?>
                    </p>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="/dashboard/ui-background/create" enctype="multipart/form-data">
                                <div class="row g-2">
                                    <div class="col-sm-12 mb-3">
                                    <div class="row border p-2" style="--bs-gutter-x:0px;">
                                    <h4>Ảnh nền</h4>
                                        <div class="col-md-4 px-2">
                                            <div>
                                                <img src="/public/storage/images/default/g-dragon.webp" class="" style="width:100%;" id="background_img_add">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <style>
                                                    .btnChangeLogo {
                                                        padding: 6px;
                                                        border-radius: 4px;
                                                        border: 1px solid #7f8c8d;
                                                        cursor: pointer;
                                                        position: absolute;
                                                        bottom: 0;
                                                        width: 84px;
                                                        text-align: center;
                                                    }
                                                    .btnChangeLogo:hover {
                                                        text-decoration: underline;
                                                    }
                                                    .btnChangeLogo ~ .cancel {

                                                        margin-left: 100px;
                                                    }
                                                </style>
                                                <div class="position-relative h-100 w-100 d-flex align-item-center">
                                                    <label for="background-img" class="btnChangeLogo">Thay đổi</label>
                                                    <button type="button" id="btnCancelUpdateImg" class="d-none btnChangeLogo cancel">Hủy</button>
                                                </div>
                                                <input id="background-img" name="suib_img" type="file" style="display: none;" data-url-logo="">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-warning">Thêm mới</button>
                            </form>                      
                        </div>
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    
</div> 
<!-- container -->


<!-- bundle -->
<script src="/public/dashboard/assets/js/vendor.min.js"></script>
<script src="/public/dashboard/assets/js/app.min.js"></script>

<script>
    CKEDITOR.replace('contenteditor');
</script>
<script>

    $('#background-img') && $('#background-img').change(function(event) {

        const [file] = event.target.files;

       if($('#background_img_add')) {

            document.querySelector('#background_img_add').src = URL.createObjectURL(file); 

            $('#btnCancelUpdateImg').removeClass('d-none');
       }
    });

    $('#btnCancelUpdateImg') && $('#btnCancelUpdateImg').click(function() {


        $('#background_img_add').attr('src', "/public/storage/images/default/g-dragon.webp");

        $('#btnCancelUpdateImg').addClass('d-none');
    });
</script>


<?php View::__template()->__endSection(); ?>