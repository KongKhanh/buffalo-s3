<?php

    View::__template()->__extends("layouts/dashboard/app.dashboard.view.php");

    View::__template()->__startSection("content");
?>

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

                    <ul class="nav nav-tabs nav-bordered mb-3"></ul> <!-- end nav-->
                    
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="/dashboard/news/categories/update/<?php echo $formCategory['news_cate_id'];?>">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="news_title" class="form-label">Tiêu đề</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="news_cate_title" 
                                            id="news_title" 
                                            placeholder="Nhập tên tiêu đề"
                                            value="<?php echo $formCategory['news_cate_title'];?>"
                                        >
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn btn-warning">CẬP NHẬT</button>
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

<?php View::__template()->__endSection(); ?>