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
                        <!-- By adding <code>.row</code> & <code>.g-2</code>, you can have control over the gutter width in as well the inline as block direction. -->
                    </p>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="/dashboard/ads-slide/create" enctype="multipart/form-data">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="ads_slide_title" class="form-label">Tiêu đề trình chiếu</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="ads_slide_title" 
                                            id="ads_slide_title" 
                                            placeholder="Nhập tiêu đề trình chiếu"
                                            value=""
                                        >
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="ads_slide_link_to" class="form-label">Link liên kết</label>
                                        <input 
                                            class="form-control" 
                                            type="text" 
                                            id="ads_slide_link_to" 
                                            name="ads_slide_link_to"
                                            value=""
                                        >
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                    <div class="row border p-2" style="--bs-gutter-x:0px;">
                                    <h4>Hình ảnh trình chiếu</h4>
                                        <div class="col-md-4 px-2">
                                            <div>
                                                <img src="/public/storage/images/default/g-dragon.webp" class="" style="width:100%;" id="ads_slide_img_link_add_form">
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
                                                    <label for="ads_slide_img_link_form" class="btnChangeLogo">Thay đổi</label>
                                                    <button type="button" id="btnCancelUpdateImg" class="d-none btnChangeLogo cancel">Hủy</button>
                                                </div>

                                                <input id="ads_slide_img_link_form" name="ads_slide_img_link" type="file" style="display: none;" data-url-logo="">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-warning">CẬP NHẬT</button>
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
    
    var urlLogoOrigin = '';

    $('#ads_slide_img_link_form') && $('#ads_slide_img_link_form').change(function(event) {

        const [file] = event.target.files;

        urlLogoOrigin = $(this).attr('data-url-logo');

       if($('#ads_slide_img_link_add_form')) {

            document.querySelector('#ads_slide_img_link_add_form').src = URL.createObjectURL(file); 

            $('#btnCancelUpdateImg').removeClass('d-none');
       }
    });

    $('#btnCancelUpdateImg') && $('#btnCancelUpdateImg').click(function() {

        $('#ads_slide_img_link_add_form').attr('src', urlLogoOrigin);
        
        $('#btnCancelUpdateImg').addClass('d-none');
    });
</script>


<?php View::__template()->__endSection(); ?>