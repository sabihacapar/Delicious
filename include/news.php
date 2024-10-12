<!-- end search arewa -->

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Organic Information</p>
                    <h1>News Article</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- latest news -->
<div class="latest-news mt-150 mb-150">
    <div class="container">
        <div class="row">
            <?php
			$news = $DB->getAll("news", " WHERE state=?", array(1), "ORDER BY orderno ASC", 3);
			if ($news) {
				for ($i = 0; $i < count($news); $i++) {
			?>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-news">
                    <a href="<?=SITE?>news-detail/<?= $news[$i]["seflink"] ?>">
                        <div class="latest-news-bg news-bg-1"></div>
                    </a>
                    <div class="news-text-box">
                        <h3><a
                                href="<?=SITE?>news-detail/<?= $news[$i]["seflink"] ?>"><?= stripslashes($news[$i]["title"]) ?></a>
                        </h3>
                        <p class="blog-meta">
                            <span class="author"><i
                                    class="fas fa-user"></i><?= stripslashes($news[$i]["description"]) ?></span>
                            <span class="date"><i class="fas fa-calendar"></i>
                                <?= $news[$i]["date"] ?></span>
                        </p>
                        <p class="excerpt"><?= $news[$i]["texts"] ?></p>
                        <a href="single-news.html" class="read-more-btn">Daha fazlası için <i
                                class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <?php
				}
			}
			?>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-wrap">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a class="active" href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end latest news -->