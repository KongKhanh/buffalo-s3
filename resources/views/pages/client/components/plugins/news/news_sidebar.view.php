<?php 

    $newsCate       = DB::table("news_category")
    ->where("news_cate_status", "published")
    ->get();

    $latestNews     = (new NewsPageClient())->__getLatestNewsList(3); 
?>

<aside class="sidebar">
    <section class="searchbar">
        <h4 class="sidebar__title">
            Chức năng tra cứu thông tin
        </h4>
        <form action="" class="searchbar-form">
            <i class="fas fa-search"></i>
            <input type="text" name="search" id="search" placeholder="Từ khoá tìm kiếm...">
        </form>
    </section>
    <section class="category">
        <h4 class="sidebar__title">
            Danh mục:
        </h4>
        <ul class="category-list">
            <?php 
                foreach ($newsCate as $newsCateItem) {

                    $cateParsingID = Str::slug(trim($newsCateItem['news_cate_title']), "-") . "-" . $newsCateItem['news_cate_id'];

                    echo <<<HTML
                        <li class="category-item">
                            <!-- <button onclick="showCategoryMenu(this.parentNode)">
                                {$newsCateItem["news_cate_title"]}
                            </button> -->
                            <a href="/news/category/{$cateParsingID}" style="color: #FFFFFF;">
                                {$newsCateItem["news_cate_title"]}
                            </a>
                            <ul class="subcategory-list">
                                <!-- <li class="subcategory-item">
                                        Tin đào tạo
                                </li> -->
                            </ul>
                        </li>
                    HTML;
                }
            
            ?>
        </ul>
    </section>
    <section class="relate-posts">
        <h4 class="sidebar__title">
            Bài viết mới nhất
        </h4>
        <section class="relate-posts__container">
            <?php       
                foreach ($latestNews as $latestNews_Item) {

                    $date_created_at                    = date_format(date_create($latestNews_Item['news_created_at']), "d/m/Y");
                    $news_representative_image_format   = !is_null($latestNews_Item['news_representative_image']) ? $latestNews_Item['news_representative_image'] : '/public/storage/images/default-news-image.jpg';

                    $latestNews_Item['link_url'] = '/news-detail/' . trim(Str::slug($latestNews_Item["news_title"])) . "-" . $latestNews_Item["news_id"];

                    echo <<<HTML
                        <a href="{$latestNews_Item['link_url']}">
                            <article class="relate-post">
                                    <div class="relate-post__thumbnail">
                                        <img src="{$news_representative_image_format}" alt="news_representative_image">
                                    </div>
                                    <div class="relate-post__detail">
                                        <h4 class="relate-post__title">
                                            {$latestNews_Item["news_title"]}
                                        </h4>
                                        <p class="relate-post__author">
                                            <i class="fas fa-user-edit">Admin</i>
                                            <span class="relate-post__date">Ngày đăng: {$date_created_at}</span>
                                        </p>
                                    </div>
                                
                            </article>
                        </a>
                    HTML;
                }
            ?>
        </section>
    </section>
    <!-- <section class="relate-tags">
        <h4 class="sidebar__title">
            Tag liên kết
        </h4>
        <article class="tags">
            Đào tạo
        </article>
        <article class="tags">
            Hành chánh
        </article>
        <article class="tags">
            Học tập
        </article>
        <article class="tags">
            Hoạt động - Thể thao
        </article>
        <article class="tags">
            Học phí
        </article>
        <article class="tags">
            Điểm thi
        </article>
    </section> -->
</aside>