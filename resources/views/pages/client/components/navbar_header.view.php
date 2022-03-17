<?php 

    $menuCategories = (new MenuCatePage())->__getMenuCateAPI();

    $siteInfo = (new SiteInfoAPI())->__getSiteInfomation();
?>
<style>
    .main-header__menubar ul {
        position:relative;
        /* left:-30px;  */
        /* top:30px; */
    }
    .main-header__menubar > ul > li {
        display: inline-block;
        /* background-color:red; */
        height:50px;
        /* line-height: 50px; */
    }

    .sub-menu {
        display: none;
    }
    .main-header__menubar li {
        position: relative;
    }
    .main-header__menubar li:hover .sub-menu {
        display: block;
    }
    .main-header__menubar li .sub-menu {
        position: absolute;
        top: 30px;
        background: #ffff;
        text-decoration: none;
        left: 0;
    }
    .main-header__menubar .sub-menu li {
        position:relative;
        border-bottom: 0.5px solid #C0C0C0;
        padding: 12px 22px;
        display: block;
        text-align:left;
        width:250px;
    }
    .main-header__menubar .sub-menu li:hover {
        background-color:#FFFAFA;
        transition:0.5s;
    }
    .main-header__menubar .sub-menu li:hover a {
        color:#FF6347;
        transition:0.5s;
    }
    .main-header__menubar .sub-menu > li > a {
        color:black;
        width:250px;
        text-align:left;
        word-wrap: break-word;
        text-decoration: none;
    }
    .main-header__menubar .sub-menu > li >a :hover {

        text-decoration: underline;
    }
    .menu_category:hover .menuParentList { 

        display: block;
    }  
</style>
<section class="main-header--inner">
    <article class="main-header__content">
        <a class="main-header__logo" href="/">
            <img src="<?= $siteInfo['site_info_main_logo']; ?>" alt="Logo">
        </a>
        <div class="main-header__contact">
            <p class="main-header__contact--email">tuyensinh@ats.edu.vn - tuyensinh@ats.edu.vn</p>
            <p class="main-header__contact--phone">0359744542 - 0359744542</p>
        </div>
    </article> 
    <nav class="main-header__menubar">
        <ul class="menubar__list">

            <!--Menu Cate-->

            <?php 
                for($i = 0; $i < count($menuCategories); $i++){

                    $subCateA = "";
                    
                    foreach($menuCategories[$i]['subCate'] as $subCate) {

                        $subCateA .= <<<HTML
                            <li><a href="{$subCate['link_url']}" style="text-decoration: none;">{$subCate['mc_title']}</a></li>
                        HTML;
                    }

                    echo 
                    <<<HTML
                        <li class="menubar__list-item menu_category" value="{$menuCategories[$i]['mc_id']}">
                            <a href="{$menuCategories[$i]['link_url']}">{$menuCategories[$i]['mc_title']}</a>
                            <ul class="sub-menu">
                                {$subCateA}
                            </ul>
                        </li>   
                    HTML;
                }
            ?>

            <li class="menubar__list-item menu_category">
                <a href="/news">Tin tức</a>
            </li>

            <li class="menubar__list-item menu_category">
                <a href="/contact-us">Liên hệ</a>
            </li>

            <li class="menubar__list-item menu_category">
                <a href="/about-us">Giới thiệu</a>
            </li>

            <!-- <li class="menubar__list-item" style="animation: none;">
                <input type="text" name="headSearh" id="headSearch" placeholder="Tìm kiếm">
                <button name="header-search--btn" class="btn" id="headSearchBtn">
                    <i class="fas fa-search"></i>
                </button>
            </li> -->
        </ul>
    </nav>
</section>