<div class="latest-news pt-150 pb-150">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Bizden</span> Haberler</h3>
                    <p>En günceller haberler için buradasınız</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $news = $DB->getAll("news", " WHERE state=?", array(1), "ORDER BY orderno ASC");
            if ($news) {
                for ($i = 0; $i < count($news); $i++) {
            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news.html">
                                <div class="latest-news-bg news-bg-1"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html"><?= stripslashes($news[$i]["title"]) ?></a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i>
                                        <?= stripslashes($news[$i]["description"]) ?></span>
                                    <span class="date"><i class="fas fa-calendar"></i>
                                        <?= stripslashes($news[$i]["date"]) ?></span>
                                </p>
                                <p class="excerpt"><?= stripslashes($news[$i]["texts"]) ?></p>
                                <a href="single-news.html" class="read-more-btn">Daha fazlası <i
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
            <div class="col-lg-12 text-center">
                <a href="news.html" class="boxed-btn">Daha fazla haber için</a>
            </div>
        </div>
    </div>
</div>