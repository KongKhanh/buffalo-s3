<?php 

    $menuCategories = (new MenuCatePage())->__getMenuCateAPI();
?>
<style>
        a {
            text-decoration: none !important;
        }
       .main-header__menubar ul{
            position:relative;
            left:-30px; 
            top:30px;
        }
       .main-header__menubar>ul>li{
            display: inline-block;
            /* background-color:red; */
            height:50px;
        }

        .sub-menu {
            display: none;
        }
        .main-header__menubar li {
            position: relative;
        }
        .main-header__menubar li:hover .sub-menu{
            display: block;
        }
        .main-header__menubar li .sub-menu{
            position: absolute;
            top: 30px;
            background: #ffff;
            text-decoration: none;
            left: 0;
        }
        .main-header__menubar .sub-menu li {
            position:relative;
            border-bottom: 0.5px solid #C0C0C0;
            padding: 5px 18px;
            display: block;
            text-align:left;
            width:250px;
        }
        .main-header__menubar .sub-menu li:hover{
            background-color:#FFFAFA;
            transition:0.5s;
        }
        .main-header__menubar .sub-menu li:hover a{
            color:#FF6347;
            transition:0.5s;
            text-decoration: none;
        }
        .main-header__menubar .sub-menu>li>a{
            color:black;
            width:250px;
            text-align:left;
            word-wrap: break-word;
            text-decoration: none;
        }
        .main-header__menubar .sub-menu>li>a:hover {
            text-decoration: none;
        }
        .menu_category:hover .menuParentList{ 
            display:block;
        }  
</style>
<section class="main-header--inner">
    <a class="main-header__logo" href="/">
        <img src="/public/client/assets/images/ats-logo-2.png" alt="">
        <p class="logo-text">Trường Trung cấp
            <br> Kỹ thuật Nông nghiệp</p>
    </a>
    <nav class="main-header__menubar">

        <ul class="menubar__list">
            <?php 
                for($i = 0; $i < count($menuCategories); $i++){

                    $subCateA = "";
                    
                    foreach($menuCategories[$i]['subCate'] as $subCate) {

                        $subCateA .= <<<HTML
                            <li><a href="{$subCate['link_url']}">{$subCate['mc_title']}</a></li>
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
            <li class="menubar__list-item">
                <button name="header-search--btn" class="btn">
                    <i class="fas fa-search"></i>
                </button>
            </li>
        </ul>
    </nav>
</section>