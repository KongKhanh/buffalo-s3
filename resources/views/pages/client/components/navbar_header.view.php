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
        z-index: 99;
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
        
    </article> 
    <nav class="main-header__menubar">
        <div class="main-header__contact">
            <p class="main-header__contact--email">
                <span style="text-transform: capitalize; margin-right: 6px; color: #192a56;">EMAIL: </span>
                <?php 
                    $stopPoint = 0;

                    $breakLine = "-";

                    foreach ($siteInfo["siteEmail"] as $email) {

                        $stopPoint++;

                        if($stopPoint >= (count($siteInfo["siteEmail"]))){

                            $breakLine = "";
                        };

                        echo <<<HTML
                            {$email['sie_email']} {$breakLine}
                        HTML;
                    }
                ?>
            </p>
            <p class="main-header__contact--phone">
                <span style="text-transform: capitalize; margin-right: 6px; color: #192a56;">S??? ??I???N THO???I: </span>
                <?php 
                    $stopPoint = 0;

                    $breakLine = "-";

                    foreach ($siteInfo["sitePhone"] as $phone) {

                        $stopPoint++;

                        if($stopPoint >= (count($siteInfo["sitePhone"]))){

                            $breakLine = "";
                        };

                        echo <<<HTML
                            {$phone['sip_phone']} {$breakLine}
                        HTML;
                    }
                ?>

            </p>
        </div>
        <ul class="menubar__list">

            <!--Menu Cate-->

            <?php 
                for($i = 0; $i < count($menuCategories); $i++){

                    if($menuCategories[$i]['mc_status'] == 'published') {

                        $subCateA = "";
                    
                        if($menuCategories[$i]['subCate']){
                            foreach($menuCategories[$i]['subCate'] as $subCate) {
    
                                $subCateA .= <<<HTML
                                    <li><a href="{$subCate['link_url']}" style="text-decoration: none;">{$subCate['mc_title']}</a></li>
                                HTML;
                            }
                        }
                        if($menuCategories[$i]['suba_cate_infor']){
                            foreach($menuCategories[$i]['suba_cate_infor'] as $subCate_infor) {
                                $subCateA .= <<<HTML
                                    <li><a href="{$subCate_infor['link_url']}" style="text-decoration: none;">{$subCate_infor['post_title']}</a></li>
                                HTML;
                            }
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
                }
            ?>

            <!-- <li class="menubar__list-item menu_category">
                <a href="/news">Tin t???c</a>
            </li>

            <li class="menubar__list-item menu_category">
                <a href="/contact-us">Li??n h???</a>
            </li>

            <li class="menubar__list-item menu_category">
                <a href="/about-us">Gi???i thi???u</a>
            </li> -->

            <!-- <li class="menubar__list-item" style="animation: none;">
                <input type="text" name="headSearh" id="headSearch" placeholder="T??m ki???m">
                <button name="header-search--btn" class="btn" id="headSearchBtn">
                    <i class="fas fa-search"></i>
                </button>
            </li> -->
        </ul>
    </nav>
</section>