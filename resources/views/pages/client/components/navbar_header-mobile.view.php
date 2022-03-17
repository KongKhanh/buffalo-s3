<!-- #region News -->
<nav class="navbar__mobile">
    <label for="nav-mobile-input" class="nav__bars-btn">
        <i class="fas fa-bars"></i>
    </label>
    <input type="checkbox" name="" class="nav__input" id="nav-mobile-input" hidden>
    <label for="nav-mobile-input" class="nav-overlay"></label>
    <ul class="menubar__list nav__mobile">
        <label for="nav-mobile-input"  class="nav__mobile-close"><i class="fas fa-times"></i></label>
        <li class="menubar__mobile-list-item"><img src="/public/client/assets/images/ats-logo-2.png" alt=""></li>
        <li class="menubar__mobile-list-item" id="visited"><a href="#">Trang chủ</a></li>
        <li class="menubar__mobile-list-item"><a href="#">Giới thiệu</a></li>
        <li class="menubar__mobile-list-item"><a href="#">Phòng ban</a></li>
        <li class="menubar__mobile-list-item"><a href="#">Tin tức</a></li>
        <li class="menubar__mobile-list-item"><a href="#">Liên hệ</a></li>
        <li class="menubar__mobile-list-item"><a href="#">Tuyển dụng</a></li>
        <li class="menubar__list-item">
            <input 
                type="text" 
                style="
                    padding: 1em;
                    margin: 1.5em 0;
                    border-radius: .5em;
                    border: none;
                    width: 90%;
                    font-size: 0.95em;"
                placeholder="Tìm kiếm"
            >
            <button name="header-search--btn" class="btn" style="color: white">
                <i class="fas fa-search"></i>
            </button>
        </li>
    </ul>
</nav>