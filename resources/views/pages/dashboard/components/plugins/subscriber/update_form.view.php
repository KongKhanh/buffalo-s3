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
                            <form method="POST" action="/dashboard/subscriber/update/<?php echo $subscriberItem['subscriber_id'];?>">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="mc_title" class="form-label">Tên người đăng ký</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="subscriber_name" 
                                            id="subscriber_name" 
                                            placeholder="Nhập tên người đăng ký"
                                            value="<?= $subscriberItem['subscriber_name'] ?>"
                                        >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="mc_title" class="form-label">Số điện thoại người đăng ký</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="subscriber_phone" 
                                            id="subscriber_phone" 
                                            placeholder="Nhập số điện thoại người đăng ký"
                                            value="<?= $subscriberItem['subscriber_phone'] ?>"
                                        >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="mc_title" class="form-label">Địa chỉ người đăng ký</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="subscriber_address" 
                                            id="subscriber_address" 
                                            placeholder="Nhập địa chỉ người đăng ký"
                                            value="<?= $subscriberItem['subscriber_address'] ?>"
                                        >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="mc_title" class="form-label">Email người đăng ký</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="subscriber_email" 
                                            id="subscriber_email" 
                                            placeholder="Nhập email người đăng ký"
                                            value="<?= $subscriberItem['subscriber_email'] ?>"
                                        >
                                    </div>
                                    <div class="mb-0 col-md-6" data-select2-id="5">
                                        <label for="project-overview" class="form-label">Hệ đào tạo</label>
                                        <select class="form-select" id="level_of_training" name="subscriber_lot_id">
                                            <?php 
                                                foreach($lotItems as $lotItem) {

                                                    $selected = $lotItem['lot_id'] == $subscriberItem['subscriber_lot_id'] ? "selected" : "";

                                                    echo <<<HTML
                                                        <option value="{$lotItem['lot_id']}" {$selected}>{$lotItem['lot_name']}</option>
                                                    HTML;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-0 col-md-6" data-select2-id="5">
                                        <label for="project-overview" class="form-label">Ngành đào tạo</label>
                                        <select class="form-select" id="course" name="subscriber_mjr_id">
                                            <option selected hidden value="0">Chọn ngành đào tạo</option>
                                            <?php 
                                                foreach($mjrItems as $mjrItem) {

                                                    $selected = $mjrItem['mjr_id'] == $subscriberItem['subscriber_mjr_id'] ? "selected" : "";
                                                    echo <<<HTML
                                                        <option value="{$mjrItem['mjr_id']}" {$selected}>{$mjrItem['mjr_name']}</option>
                                                    HTML;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="news_main_content" class="form-label">Nội dung ghi chú</label>
                                        <textarea type="text" name="subscriber_note" class="form-control" readonly rows="8"
                                        id="contenteditor"><?= $subscriberItem['subscriber_note'] ?></textarea>
                                    </div>
                                </div>
                                <button type="submit" style="margin-top:20px;" class="btn btn-warning">CẬP NHẬT</button>
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

<script>
    $(document).ready(function(){
    $("#level_of_training").change(function(){
        var idLot = $(this).val();
        if(idLot){
            $.ajax({
                method: "GET",
                url: `/api/majors-by-id/${idLot}`,
                headers: {
                    'Content-Type':'application/json'
                },
                }).done(function( res ) {
                    res = JSON.parse(res);
                    var getMajor = " ";

                    for (let i = 0; i < res.majorsById.length; i++) { 
                     
                        getMajor += `<option value="${res.majorsById[i].mjr_id}">${res.majorsById[i].mjr_name}</option>`
                    };
                $("#course").html(getMajor);
            });
        }
    });
});

</script>

<?php View::__template()->__endSection(); ?>