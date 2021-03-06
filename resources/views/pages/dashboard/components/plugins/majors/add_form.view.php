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
                    <ul class="nav nav-tabs nav-bordered mb-3"></ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="mjr_name" class="form-label">Tên ngành</label>
                                        <input type="text" class="form-control" name="mjr_name" id="mjr_name" placeholder="Nhập tên ngành">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="news_news_cate_id" class="form-label">Hệ đào tạo</label>
                                        <select id="mjr_lot_id" class="form-select" name="mjr_lot_id">
                                            <option selected hidden value="0">Chọn hệ đào tạo</option>
                                            <?php 
                                                foreach($level_of_training as $level_of_training_item) {
                                                    echo <<<HTML
                                                        <option value="{$level_of_training_item['lot_id']}">{$level_of_training_item['lot_name']}</option>
                                                    HTML;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="mjr_code" class="form-label">Mã ngành</label>
                                        <input type="text" class="form-control" name="mjr_code" id="mjr_code" placeholder="Nhập mã ngành">
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Ảnh đại diện cho ngành học</label>
                                        <input class="form-control" type="file" id="mjr_main_profile" name="mjr_main_profile">
                                    </div>
                                </div>
                                
                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="mjr_main_description" class="form-label">Mô tả chi tiết</label>
                                        <textarea type="text" name="mjr_main_description" class="form-control" id="contenteditor"></textarea>
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