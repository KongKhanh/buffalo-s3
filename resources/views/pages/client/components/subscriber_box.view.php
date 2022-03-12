<section class="register-modal" id="registerModal">
    <section class="register-block register-modal--block">
        <i 
            class="fas fa-times-circle" 
            style="font-size: 1.5em;
            color: red;
            position: absolute;
            right: .5em;
            top: .5em;" 
            id="registerModalHidden"
        >
        </i>
        <form action="" id="registerForm" method="POST">
            <article class="base-info">
                <h4 class="register-title">
                    Thông tin cá nhân
                </h4>
                <section class="base-value">
                    <article class="input-block">
                        <div class="input-box">
                            <input type="text" name="fullName" id="fullName" placeholder="Họ và tên...">
                            <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                            <i class="fas fa-user input-tag"></i>
                        </div>
                        <p class="input-error">Vui lòng nhập họ tên</p>
                    </article>
                    <article class="input-block">
                        <div class="input-box">
                            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Số điện thoại...">
                            <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                            <i class="fas fa-phone input-tag"></i>
                        </div>
                        <p class="input-error">Vui lòng nhập lại số điện thoại</p>
                    </article>
                </section>
                <article class="input-block">
                    <div class="input-box">
                        <input type="text" name="dateOfBirth" id="dateOfBirth" placeholder="Ngày sinh" onfocus="(this.type = 'date')" onblur="(this.type = 'text')">
                        <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                        <i class="fas fa-calendar input-tag"></i>
                    </div>
                    <p class="input-error">Vui lòng nhập lại ngày sinh</p>
                </article>
                <article class="input-block">
                    <div class="input-box">
                        <input type="text" name="email" id="email" placeholder="Email...">
                        <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                        <i class="fas fa-envelope input-tag"></i>
                    </div>
                    <p class="input-error">Vui lòng nhập lại Email</p>
                </article>
                <article class="input-block">
                    <div class="input-box">
                        <input type="text" name="address" id="address" placeholder="Địa chỉ liên hệ...">
                        <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                        <i class="fas fa-map input-tag"></i>
                    </div>
                    <p class="input-error">Vui lòng nhập lại địa chỉ</p>
                </article>
                <article class="input-block">
                    <div class="input-box">
                        <select name="education" id="education">
                            <option value="-1" selected>Trình độ học vấn</option>
                            <option value="junior">Trung học cơ sở</option>
                            <option value="high">Trung học phổ thông</option>
                            <option value="other">Khác</option>
                        </select>
                        <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                    </div>
                    <p class="input-error">Vui lòng chọn lại trình độ học vấn</p>
                </article>
            </article>
            <article class="other-info">
                <h4 class="register-title">
                    Thông tin đăng ký xét tuyển
                </h4>
                <article class="input-block">
                    <div class="input-box">
                        <select name="trainingSystem" id="trainingSystem">
                            <option value="-1" selected>Hệ đào tạo</option>
                            <option value="mid">Trung cấp chuyên nghiệp</option>
                            <option value="short">Khóa ngắn hạn</option>
                            <option value="thematic">Khác</option>
                        </select>
                        <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                    </div>
                    <p class="input-error">Vui lòng chọn lại hệ đào tạo</p>
                </article>
                <article class="input-block">
                    <div class="input-box">
                        <select name="course" id="course">
                            <option value="-1" selected>Ngành đào tạo</option>
                            <option value="1">Quản lý nhà đất</option>
                            <option value="2">Quản lý đất đai</option>
                            <option value="3">Chăn nuôi - Thú y</option>
                            <option value="4">Kế toán doanh nghiệp</option>
                            <option value="5">Thuỷ lợi tổng hợp</option>
                            <option value="6">Bảo trì & sửa chữa thiết bị nhiệt(cơ điện lạnh)</option>
                            <option value="7">Trồng trọt và Bảo vệ thực vật</option>
                            <option value="8">Trắc địa - Địa hình - Địa chính</option>
                            <option value="9">Điện công nghiệp và Dân dụng</option>
                            <option value="10">Quản lý tài nguyên môi trường</option>
                            <option value="11">Kinh doanh bất động sản</option>
                            <option value="12">Thiết kế cảnh quan viên</option>
                        </select>
                        <i class="fas fa-exclamation-circle error-tag" style="color: red;"></i>
                    </div>
                    <p class="input-error">Vui lòng chọn lại ngành đào tạo</p>
                </article>
                <article class="input-block">
                    <div class="input-box">
                        <textarea name="note" id="note" placeholder="Ghi chú"></textarea>
                    </div>
                </article>
            </article>
            <article class="register--btn">
                <button id="registerSubmit" name="registerSubmit">
                    Đăng ký
                </button>
            </article>
        </form>
    </section>
</section>
