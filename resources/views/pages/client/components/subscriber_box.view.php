<?php  

    $trainingTypeList = DB::table('level_of_training')->get(); 

    $popupStatusForm    = "";
    $popupStatusCCForm  = "";

    if(Session::has("res_subscriber")) {

        $res_subscriber = Session::get("res_subscriber");

        $popupStatusForm = isset($res_subscriber['errors']) ? "display: block;" : "display: none;";
    }

    if(Session::has("status_contact_consult")) {

        $res_contact_consult = Session::get("status_contact_consult");

        $popupStatusCCForm = isset($res_contact_consult['errors']) ? "display: block;" : "display: none;";
    }
?>
<style>

    #registerSubmit {
        width: 100%;
        border-radius: 4px;
        padding: 10px 0;
        background-color: #065FD4;
        color: #FFFFFF;
        text-transform: uppercase;
        cursor: pointer;
    }
    #registerSubmit:hover {
        background-color: #3498db;
    }
    #registerModalHidden:hover {
        cursor: pointer;
    }
</style>

<section class="register-modal" id="registerModal" style="<?= $popupStatusForm;?>">
    <section class="register-block register-modal--block">
        <i 
            class="fas fa-times-circle" 
            style="font-size: 1.5em; color: red; position: absolute; right: .5em; top: .5em;" 
            id="registerModalHidden"
        >
        </i>
        <form action="/subscriber-form" id="registerForm" method="POST">
            <article class="base-info">
                <h4 class="register-title">
                    Thông Tin Cá Nhân
                </h4>
                <section class="base-value">
                    <article class="input-block">
                                <label for="fullName">Họ và tên</label>
                                <div class="input-box">
                                    <input type="text" name="subscriber_name" id="fullName" placeholder="Họ và tên...">
                                    <!-- <i class="fas fa-exclamation-circle" style="color: red;"></i> -->
                                    <?php 
                                        if(isset($res_subscriber['errors']['error_admin_name'])){
                                            echo <<<HTML
                                                <span class="text-danger" style="color: red;">{$res_subscriber['errors']['error_admin_name']}</span>
                                            HTML;
                                        }
                                    ?>
                                </div>
                        <p class="input-error">Vui lòng nhập họ tên</p>
                    </article>
                    <article class="input-block">
                        <label for="phoneNumber">Số điện thoại</label>
                        <div class="input-box">
                            <input type="number" name="subscriber_phone" id="phoneNumber" placeholder="Số điện thoại...">
                            <!-- <i class="fas fa-exclamation-circle" style="color: red;"></i> -->
                            <?php 
                                if(isset($res_subscriber['errors']['error_admin_phone'])){
                                    echo <<<HTML
                                        <span class="text-danger" style="color: red;">{$res_subscriber['errors']['error_admin_phone']}</span>
                                    HTML;
                                }
                            ?>
                        </div>
                        <p class="input-error">Vui lòng nhập lại số điện thoại</p>
                    </article>
                </section>
                <article class="input-block">
                    <label for="dateOfBirth">Ngày sinh</label>
                    <div class="input-box">
                        <input type="date" name="subscriber_dob" id="dateOfBirth" placeholder="dd/mm/yyyy">
                        <!-- <i class="fas fa-exclamation-circle" style="color: red;"></i> -->
                        <?php 
                            if(isset($res_subscriber['errors']['error_admin_dob'])){
                                echo <<<HTML
                                    <span class="text-danger" style="color: red;">{$res_subscriber['errors']['error_admin_dob']}</span>
                                HTML;
                            }
                        ?>
                    </div>
                    <p class="input-error">Vui lòng nhập lại ngày sinh</p>
                </article>
                <article class="input-block">
                    <label for="email">Email</label>
                    <div class="input-box">
                        <input type="text" name="subscriber_email" id="email" placeholder="Email...">
                        <!-- <i class="fas fa-exclamation-circle" style="color: red;"></i> -->
                        <?php 
                            if(isset($res_subscriber['errors']['error_admin_email'])){
                                echo <<<HTML
                                    <span class="text-danger" style="color: red;">{$res_subscriber['errors']['error_admin_email']}</span>
                                HTML;
                            }
                        ?>
                    </div>
                    <p class="input-error">Vui lòng nhập lại Email</p>
                </article>
                <article class="input-block">
                    <label for="address">Địa chỉ</label>
                    <div class="input-box">
                        <input type="text" name="subscriber_address" id="address" placeholder="Địa chỉ liên hệ...">
                        <!-- <i class="fas fa-exclamation-circle" style="color: red;"></i> -->
                        <?php 
                            if(isset($res_subscriber['errors']['error_admin_address'])){
                                echo <<<HTML
                                    <span class="text-danger" style="color: red;">{$res_subscriber['errors']['error_admin_address']}</span>
                                HTML;
                            }
                        ?>
                    </div>
                    <p class="input-error">Vui lòng nhập lại địa chỉ</p>
                </article>
            </article>
            <article class="other-info">
                <h4 class="register-title">
                    Thông Tin Đăng Ký Xét Tuyển
                </h4>
                <article class="input-block">
                    <label for="trainingSystem">Hệ đào tạo</label>
                    <div class="input-box">
                        <select name="subscriber_lot_id" id="level_of_training_lot">
                        <option value="" disabled selected >Chọn hệ đào tạo</option>
                            <?php 
                                if($trainingTypeList){
                                    foreach($trainingTypeList as $typeTraining){
                                        echo
                                        <<< HTML
                                            <option value="{$typeTraining['lot_id']}">{$typeTraining['lot_name']}</option>
                                        HTML;
                                    }
                                }
                            ?>
                        </select>
                        <?php 
                            if(isset($res_subscriber['errors']['error_admin_mjr'])){
                                echo <<<HTML
                                    <span class="text-danger" style="color: red;">{$res_subscriber['errors']['error_admin_mjr']}</span>
                                HTML;
                            }
                        ?>
                        <!-- <i class="fas fa-exclamation-circle" style="color: red;"></i> -->
                    </div>
                    <p class="input-error">Vui lòng chọn lại hệ đào tạo</p>
                </article>
                <article class="input-block">
                    <label for="course">Ngành đào tạo</label>
                    <div class="input-box">
                        <select name="subscriber_mjr_id" id="course_mjr">
                        </select>
                                <?php 
                                    if(isset($errors['error_admin_lot'])){
                                        echo <<<HTML
                                            <i class="fas fa-exclamation-circle" style="color: red;"></i>
                                            <span class="text-danger" style="color: red;">{$errors['error_admin_lot']}</span>
                                        HTML;
                                    }
                                ?>
                        <!-- <i class="fas fa-exclamation-circle" style="color: red;"></i> -->
                    </div>
                    <p class="input-error">Vui lòng chọn lại ngành đào tạo</p>
                </article>
                <article class="input-block">
                    <div class="input-box">
                        <textarea name="subscriber_note" id="note" placeholder="Ghi chú" rows="6"></textarea>
                    </div>
                </article>
            </article>
            <article class="register--btn">
                <article class="input-block">
                    <div class="input-box">
                        <input id="registerSubmit" name="registerSubmit" value="Đăng ký" type="submit">
                    </div>
                </article>
            </article>
        </form>
    </section>
</section>


<!------------------------Consult Form------------------------------------->

<section class="register-modal" id="consultModal" style="<?= $popupStatusCCForm;?>">
    <input type="hidden" id="status-cc-form" value="<?php if(isset($res_contact_consult['status'])) {echo($res_contact_consult['status']);}?>">
    <section class="register-block register-modal--block">
        <i 
            class="fas fa-times-circle" 
            style="font-size: 1.5em; color: red; position: absolute; right: .5em; top: .5em;" 
            id="consultModalHidden"
        >
        </i>
        <form id="consultForm" action="/contact-consult-form" method="POST">
            <article class="base-info">
                <h4 class="register-title">
                    Thông Tin Liên Hệ Tư Vấn
                </h4>
                <section class="base-value">
                    <article class="input-block">
                        <label for="">Họ và tên</label>
                        <div class="input-box">
                            <input type="text" name="cc_name" id="" placeholder="Họ và tên...">
                        </div>
                        <?php 
                            if(isset($res_contact_consult['errors']['error_cc_name'])){
                                echo <<<HTML
                                    <p class="text-danger" style="color: red;">{$res_contact_consult['errors']['error_cc_name']}</p>
                                HTML;
                            }
                        ?>
                    </article>
                    <article class="input-block">
                        <label for="">Số điện thoại</label>
                        <div class="input-box">
                            <input type="number" name="cc_phone" id="" placeholder="Số điện thoại...">
                        </div>
                        <?php 
                            if(isset($res_contact_consult['errors']['error_cc_phone'])){
                                echo <<<HTML
                                    <p class="text-danger" style="color: red;">{$res_contact_consult['errors']['error_cc_phone']}</p>
                                HTML;
                            }
                        ?>
                    </article>
                </section>
            </article>
            <article class="input-block">
                <div class="input-box">
                    <textarea name="cc_note" id="cc_note" placeholder="Ghi chú" rows="6"></textarea>
                </div>
                        <?php 
                            if(isset($res_contact_consult['errors']['error_cc_note'])){
                                echo <<<HTML
                                    <p class="text-danger" style="color: red;">{$res_contact_consult['errors']['error_cc_note']}</p>
                                HTML;
                            }
                        ?>
            </article>
            <article class="register--btn">
                <article class="input-block">
                    <div class="input-box">
                        <input id="registerSubmit" name="registerSubmit" value="TẠO LIÊN HỆ" type="submit">
                    </div>
                </article>
            </article>
        </form>
    </section>
</section>


