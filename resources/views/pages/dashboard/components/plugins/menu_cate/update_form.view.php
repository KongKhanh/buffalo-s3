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
                            <form method="POST" action="/dashboard/menu-cate/update/<?php echo $menuCateItem['mc_id'];?>">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="mc_title" class="form-label">Tên danh mục</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="mc_title" 
                                            id="mc_title" 
                                            placeholder="Nhập tên tiêu đề"
                                            value="<?php echo $menuCateItem['mc_title'];?>"
                                        >
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="link_url" class="form-label">Link danh mục (tùy chọn)</label>
                                    <input 
                                        type="text" 
                                        name="link_url" 
                                        class="form-control" 
                                        id="link_url" 
                                        placeholder="Nhập link bài viết"
                                        value="<?php echo $menuCateItem['link_url'];?>"
                                    >
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