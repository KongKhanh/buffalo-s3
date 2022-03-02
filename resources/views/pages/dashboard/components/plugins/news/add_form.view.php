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
                    <h4 class="header-title">Form NỘI DUNG</h4>
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
                            <form method="POST" action="">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="news_title" class="form-label">Tiêu đề</label>
                                        <input type="text" class="form-control" name="news_title" id="news_title" placeholder="Nhập tên tiêu đề">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputState" class="form-label">Thể loại bài viết</label>
                                        <select id="inputState" class="form-select">
                                            <option>Chọn thể loại</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="mb-3 col-md-12">
                                        <label for="news_main_content" class="form-label">Nội dung bài viết</label>
                                        <textarea type="text" name="news_main_content" class="form-control" id="contenteditor"></textarea>
                                    </div>
                                </div>

                                <!-- <div class="mb-3">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div> -->

                                <!-- <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="inputState" class="form-label">State</label>
                                        <select id="inputState" class="form-select">
                                            <option>Choose</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div> -->

                                <div class="mb-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck11">
                                        <label class="form-check-label" for="customCheck11">Check this custom checkbox</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">THÊM</button>
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