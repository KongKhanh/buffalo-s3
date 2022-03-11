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

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#form-row-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Design
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#form-row-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Preview
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    
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
                    
                        <div class="tab-pane" id="form-row-code">
                            <pre class="mb-0">
                                <span class="html escape">
                                    &lt;form&gt;
                                        &lt;div class=&quot;row g-2&quot;&gt;
                                            &lt;div class=&quot;mb-3 col-md-6&quot;&gt;
                                                &lt;label for=&quot;inputEmail4&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
                                                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail4&quot; placeholder=&quot;Email&quot;&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;mb-3 col-md-6&quot;&gt;
                                                &lt;label for=&quot;inputPassword4&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword4&quot; placeholder=&quot;Password&quot;&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;div class=&quot;mb-3&quot;&gt;
                                            &lt;label for=&quot;inputAddress&quot; class=&quot;form-label&quot;&gt;Address&lt;/label&gt;
                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;&gt;
                                        &lt;/div&gt;
                                        
                                        &lt;div class=&quot;mb-3&quot;&gt;
                                            &lt;label for=&quot;inputAddress2&quot; class=&quot;form-label&quot;&gt;Address 2&lt;/label&gt;
                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress2&quot; placeholder=&quot;Apartment, studio, or floor&quot;&gt;
                                        &lt;/div&gt;

                                        &lt;div class=&quot;row g-2&quot;&gt;
                                            &lt;div class=&quot;mb-3 col-md-6&quot;&gt;
                                                &lt;label for=&quot;inputCity&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputCity&quot;&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;mb-3 col-md-4&quot;&gt;
                                                &lt;label for=&quot;inputState&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
                                                &lt;select id=&quot;inputState&quot; class=&quot;form-select&quot;&gt;
                                                    &lt;option&gt;Choose&lt;/option&gt;
                                                    &lt;option&gt;Option 1&lt;/option&gt;
                                                    &lt;option&gt;Option 2&lt;/option&gt;
                                                    &lt;option&gt;Option 3&lt;/option&gt;
                                                &lt;/select&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;mb-3 col-md-2&quot;&gt;
                                                &lt;label for=&quot;inputZip&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputZip&quot;&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;div class=&quot;mb-2&quot;&gt;
                                            &lt;div class=&quot;form-check&quot;&gt;
                                                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck11&quot;&gt;
                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck11&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
                                    &lt;/form&gt;  
                                </span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
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