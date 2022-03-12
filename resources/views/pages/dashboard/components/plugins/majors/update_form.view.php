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
                            <form method="POST" action="/dashboard/majors/update/<?php echo $majorsItem['mjr_id'];?>">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="mjr_name" class="form-label">Tên ngành đào tạo</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="mjr_name" 
                                            id="mjr_name" 
                                            placeholder="Nhập tên ngành đào tạo"
                                            value="<?= $majorsItem['mjr_name'] ?>"
                                        >
                                    </div>
                                    <div class="mb-0 col-md-6" data-select2-id="5">
                                        <label for="mjr_lot_id" class="form-label">Hệ đào tạo</label>
                                        <select class="form-select" name="mjr_lot_id">
                                            <option selected hidden value="0">Chọn hệ đào tạo</option>
                                            <?php 
                                                foreach($level_of_training as $level_of_training_item) {

                                                    $selected = $level_of_training_item['lot_id'] == $majorsItem['mjr_lot_id'] ? "selected" : "";

                                                    echo <<<HTML
                                                        <option value="{$level_of_training_item['lot_id']}" {$selected}>{$level_of_training_item['lot_name']}</option>
                                                    HTML;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="mjr_code" class="form-label">Mã ngành đào tạo</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="mjr_code" 
                                            id="mjr_code" 
                                            placeholder="Nhập mã ngành đào tạo"
                                            value="<?= $majorsItem['mjr_code'] ?>"
                                        >
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

<?php View::__template()->__endSection(); ?>