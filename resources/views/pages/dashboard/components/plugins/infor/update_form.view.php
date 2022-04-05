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
                                        <label for="post_title" class="form-label">Tiêu đề</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="post_title" 
                                            id="post_title" 
                                            placeholder="Nhập tên tiêu đề"
                                            data-last-news-id="<?= $post['post_id'] ?>"
                                            value="<?php echo $post['post_title'];?>"
                                        >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="post_menu_id" class="form-label">Thể loại bài viết</label>
                                        <select id="post_menu_id" class="form-select" name="post_menu_id">
                                            <option selected hidden value="0">Chọn thể loại</option>
                                            <?php 

                                                foreach($inforCate as $inforItem) {

                                                    if($post['post_menu_id'] == $inforItem['mc_id']) {
  
                                                        echo <<<HTML
                                                            <option value="{$inforItem['mc_id']}" selected>{$inforItem["mc_title"]}</option>
                                                        HTML;
                                                    }
                                                    else {

                                                        echo <<<HTML
                                                               <option value="{$inforItem['mc_id']}">{$inforItem["mc_title"]}</option>
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
                                        readonly
                                        value="<?php echo $post['link_url'];?>"
                                    >
                                </div>


                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="post_content" class="form-label">Nội dung bài viết</label>
                                        <textarea 
                                            type="text" 
                                            name="post_content" 
                                            class="form-control" 
                                            id="contenteditor"
                                            value="<?php echo $post['post_content'];?>"
                                        >
                                            <?= $post['post_content'];?>
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

<script>

    document.querySelector('#post_title').addEventListener('keyup', function() {

        if(this) {

            if(document.querySelector('#link_url')) {

                let start = '/post/', 
                    middle = this.value.trim(), 
                    end = ('-' + (parseInt(this.getAttribute('data-last-news-id')))), 
                    seperate = '-';
                document.querySelector('#link_url').value = generateURL(start, middle, end, seperate);
            }
        }
    });
</script>

</script>


<?php View::__template()->__endSection(); ?>