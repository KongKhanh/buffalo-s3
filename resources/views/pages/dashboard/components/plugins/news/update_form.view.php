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
                            <form method="POST" action="">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="news_title" class="form-label">Tiêu đề</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="news_title" 
                                            id="news_title" 
                                            placeholder="Nhập tên tiêu đề"
                                            value="<?php echo $news['news_title'];?>"
                                        >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="news_news_cate_id" class="form-label">Thể loại bài viết</label>
                                        <select id="news_news_cate_id" class="form-select" name="news_news_cate_id">
                                            <option selected hidden value="0">Chọn thể loại</option>
                                            <?php 

                                                foreach($newsCate as $newsCateItem) {

                                                    if($newsCateItem['news_cate_id'] == $news['news_news_cate_id']) {
  
                                                        echo <<<HTML
                                                            <option value="{$newsCateItem['news_cate_id']}" selected>{$newsCateItem["news_cate_title"]}</option>
                                                        HTML;
                                                    }
                                                    else {

                                                        echo <<<HTML
                                                            <option value="{$newsCateItem['news_cate_id']}">{$newsCateItem["news_cate_title"]}</option>
                                                        HTML;
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="link_url" class="form-label">Link bài viết (tùy chọn)</label>
                                    <input 
                                        type="text" 
                                        name="link_url" 
                                        class="form-control" 
                                        id="link_url" 
                                        placeholder="Nhập link bài viết"
                                        value="<?php echo $news['link_url'];?>"
                                        disabled
                                    >
                                </div>

                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="news_short_content" class="form-label">Nội dung ngắn</label>
                                        <textarea 
                                            type="text" 
                                            name="news_short_content" 
                                            class="form-control" 
                                            rows="5"
                                            value="<?php echo $news['news_short_content'];?>"
                                        >
                                            <?= $news['news_short_content'];?>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="news_main_content" class="form-label">Nội dung bài viết</label>
                                        <textarea 
                                            type="text" 
                                            name="news_main_content" 
                                            class="form-control" 
                                            id="contenteditor"
                                            value="<?php echo $news['news_main_content'];?>"
                                        >
                                            <?= $news['news_main_content'];?>
                                        </textarea>
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

<script>
    CKEDITOR.replace('contenteditor');
</script>

<?php View::__template()->__endSection(); ?>