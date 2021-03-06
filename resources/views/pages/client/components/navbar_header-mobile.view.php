<?php 
    $menuCategories = (new MenuCatePage())->__getMenuCateAPI();

    $siteInfo = (new SiteInfoAPI())->__getSiteInfomation();
?>

<style>
    
    .sub-menu-a {

    }
    .sub-menu-a > li {

    }
    .sub-menu-a > li > a{
        font-size: 12px;
    }
</style>

<!-- #region News -->
<nav class="navbar__mobile">
    <label for="nav-mobile-input" class="nav__bars-btn">
        <i class="fas fa-bars"></i>
    </label>
    <input type="checkbox" name="" class="nav__input" id="nav-mobile-input" hidden>
    <label for="nav-mobile-input" class="nav-overlay"></label>
    <ul class="menubar__list nav__mobile">
        <label for="nav-mobile-input"  class="nav__mobile-close"><i class="fas fa-times"></i></label>
        <?php 
            for($i = 0; $i < count($menuCategories); $i++){

                $subCateA = "";
                
                foreach($menuCategories[$i]['subCate'] as $subCate) {

                    $subCateA .= <<<HTML
                        <li style="margin: 12px 0;"><a class="get-menu-id" data-id="{$subCate['mc_parent_id']}" href="{$subCate['link_url']}" style="text-decoration: none;">- {$subCate['mc_title']}</a></li>
                    HTML;
                }

                echo 
                <<<HTML
                    <li class="menubar__mobile-list-item">
                        <a class="onclick-submenu" data-id="{$menuCategories[$i]['mc_id']}">{$menuCategories[$i]['mc_title']}<i class="fas fa-caret-right" style="margin-left: 6px;"></i></a>
                            <ul class="sub-menu-a">
                                {$subCateA}
                            </ul>
                    </li>
                HTML;
            }
        ?>
        <li class="menubar__mobile-list-item">
            <img src="<?= $siteInfo['site_info_main_logo']; ?>" alt="Logo">
        </li>
        <!-- <li class="menubar__list-item">
            <input 
                type="text" 
                style="
                    padding: 1em;
                    margin: 1.5em 0;
                    border-radius: .5em;
                    border: none;
                    width: 90%;
                    font-size: 0.95em;"
                placeholder="T??m ki???m"
            >
            <button name="header-search--btn" class="btn" style="color: white">
                <i class="fas fa-search"></i>
            </button>
        </li> -->
    </ul>
</nav>
<script>

    $('.sub-menu-a').css('display', 'none');

    $('.menubar__mobile-list-item').click(function(){
    
        $(this).find('ul').toggle();
  });  
</script>