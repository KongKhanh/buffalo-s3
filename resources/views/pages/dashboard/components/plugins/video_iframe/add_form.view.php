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
                    <p class="text-muted font-14"></p>

                    <ul class="nav nav-tabs nav-bordered mb-3"></ul> <!-- end nav-->
                    
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="vi_title" class="form-label">Tiêu đề</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="vi_title" 
                                            id="vi_title" 
                                            placeholder="Nhập tên tiêu đề">
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="vi_content" class="form-label">Code embed</label>
                                        <textarea 
                                            type="text" 
                                            name="vi_content" 
                                            class="form-control" 
                                            rows="5"
                                        ></textarea>
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