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
                            <form method="POST" action="/dashboard/level-of-training/create" enctype="multipart/form-data">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="lot_name" class="form-label">Tên hệ đào tạo</label>
                                        <input type="text" class="form-control" name="lot_name" id="lot_name" placeholder="Nhập tên hệ đào tạo">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lot_code" class="form-label">Mã hệ đào tạo</label>
                                        <input type="text" class="form-control" name="lot_code" id="lot_code" placeholder="Nhập mã hệ đào tạo">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Ảnh đại diện</label>
                                        <input class="form-control" type="file" id="lot_main_profile" name="lot_main_profile">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">THÊM</button>
                            </form>                      
                        </div> <!-- end preview-->
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

<?php View::__template()->__endSection(); ?>