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
                    echo <<<HTML
                        <li class="category-item">
                            <button onclick="showCategoryMenu(this.parentNode)">
                                {$newsCateItem["news_cate_title"]}
                            </button>
                            <ul class="subcategory-list">
                                <li class="subcategory-item">
                                        Tin đào tạo
                                </li>
                                <li class="subcategory-item">
                                    Tin hành chính
                                </li>
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
            <article class="relate-post">
                <div class="relate-post__thumbnail">
                    <img src="/public/client/assets/images/image-3.jpeg" alt="">
                </div>
                <div class="relate-post__detail">
                    <h4 class="relate-post__title">
                        Thông báo tuyển sinh trung cấp 2020
                    </h4>
                    <p class="relate-post__author">
                        <i class="fas fa-user-edit"></i>
                        <span class="relate-post__date">ngày 01/07/2020</span>
                    </p>
                </div>
            </article>
            <article class="relate-post">
                <div class="relate-post__thumbnail">
                    <img src="/public/client/assets/images/image-1.jpeg" alt="">
                </div>
                <div class="relate-post__detail">
                    <h4 class="relate-post__title">
                        Trường tham gia ngầy hội tư vấn tuyển sinh tại Nhà ...
                    </h4>
                    <p class="relate-post__author">
                        <i class="fas fa-user-edit"></i>
                        <span class="relate-post__date">ngày 30/06/2020</span>
                    </p>
                </div>
            </article>
            <article class="relate-post">
                <div class="relate-post__thumbnail">
                    <img src="/public/client/assets/images/image-2.jpeg" alt="">
                </div>
                <div class="relate-post__detail">
                    <h4 class="relate-post__title">
                        Đoàn viên thanh niên hãy là tuyên truyền bảo
                    </h4>
                    <p class="relate-post__author">
                        <i class="fas fa-user-edit"></i>
                        <span class="relate-post__date">ngày 29/06/2020</span>
                    </p>
                </div>
            </article>
        </section>
    </section>
    <section class="relate-tags">
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
    </section>
</aside>