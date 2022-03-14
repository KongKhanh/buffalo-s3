<?php 

    $menuCategories = (new MenuCatePage())->__getMenuCateAPI();
?>

<section class="main-header--inner">
    <a class="main-header__logo" href="/">
        <img src="/public/client/assets/images/ats-logo-2.png" alt="">
        <p class="logo-text">Trường Trung cấp
            <br> Kỹ thuật Nông nghiệp</p>
    </a>
    <nav class="main-header__menubar">

        <ul class="menubar__list">
            <?php 
                for($i=0; $i<count($menuCategories); $i++){
                    echo 
                    <<<HTML
                        <li class="menubar__list-item menu_category" value="{$menuCategories[$i]['mc_id']}">
                            <a href="{$menuCategories[$i]['link_url']}">{$menuCategories[$i]['mc_title']}</a>
                        </li>
                    HTML;
                    // foreach($menuCategories[$i]['childrenList'] as $childrens){
                    //     echo
                    //     <<<HTML
                    //        <ul class="menuParentList"><a>{$childrens['mc_title']}</a></ul>
                    //     HTML;                                   
                    // }
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