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
                    <p class="text-muted font-14"></p>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="mjr_name" class="form-label">Tên danh mục</label>
                                        <input type="text" class="form-control" name="mjr_name" id="mjr_name" placeholder="Nhập tên danh mục">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="link_url" class="form-label">Link URL (tùy chọn)</label>
                                        <input type="text" class="form-control" name="link_url" id="link_url" placeholder="Nhập đường dẫn">
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