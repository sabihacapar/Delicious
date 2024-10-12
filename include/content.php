<?php
include_once(DATA . "header.php");
?>
<?php
if ($_GET && !empty($_GET["page"])) {
    //!gelen değeri sayfaya ata
    $page = $_GET["page"] . ".php";

    if (file_exists(SAYFA . $page)) { //dosya kontrolü
        include_once(SAYFA . $page);
    } else { //eğer öyle bir sayfa yoksa
        include_once(SAYFA . "content.php"); //ana sayfaya yönlendir
    }
} else {
    include_once(SAYFA . "content.php");
    //content(içerik) alanını sayfaya dahil etmek için kullanıldı.


}
?>
<!-- end header -->

<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Search For:</h3>
                        <input type="text" placeholder="Keywords">
                        <button type="submit">Search <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->

<!-- hero area -->
<div class="hero-area hero-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <?php
                        $banner = $DB->getAll("banner", " WHERE state=?", array(1), "ORDER BY orderno ASC");

                        if ($banner) {
                        ?>
                        <p class="subtitle"><?= stripslashes($banner[0]["title"]) ?></p>
                        <h1><?= $banner[0]["texts"] ?></h1>
                        <div class="hero-btns">
                            <a href="<?=SITE ?>products" class="boxed-btn">Yemekler</a>
                            <a href="<?=SITE ?>contact" class="bordered-btn">İletişim</a>
                        </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero area -->

<!-- features list section -->

<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Lezzetli</span> Yemekler</h3>
                    <p>İştah açan enfes yemeklerin tek adresi</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $products = $DB->getAll("products", " WHERE state=?", array(1), "ORDER BY orderno ASC", 3);
            if ($products) {
                for ($i = 0; $i < count($products); $i++) {
            ?>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
                    </div>
                    <h3><?= stripslashes($products[$i]["title"]) ?></h3>
                    <p class="product-price"><?= $products[$i]["title"] ?> </p>
                    <a href="cart.html" class="cart-btn">Tarif Detayı İçin</a>
                </div>
            </div>
            <?php
                }
            }

            ?>


        </div>
    </div>
</div>
<!-- end product section -->

<!-- cart banner section -->
<section class="cart-banner pt-100 pb-100">
    <div class="container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-lg-6">
                <div class="image">
                    <div class="price-box">
                        <div class="inner-price">
                            <span class="price">
                                <?php
                                $products = $DB->getAll("products", " WHERE state=?", array(1), "ORDER BY likes DESC", 1);
                                ?>
                                <strong><?= $products[0]["likes"] ?></strong> <br> Beğeni
                            </span>
                        </div>
                    </div>
                    <img src="assets/img/a.jpg" alt="">
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column col-lg-6">
                <h3><span class="orange-text">Ayın</span> Yemeği</h3>
                <?php
                $products = $DB->getAll("products", " WHERE state=?", array(1), "ORDER BY likes DESC", 1);
                ?>
                <h4><?= stripslashes($products[0]["title"])  ?></h4>
                <div class="text"><?= $products[0]["texts"] ?></div>
                <!--Countdown Timer-->
                <div class="time-counter">
                    <div class="time-countdown clearfix" data-countdown="2020/2/01">
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Tarif malzemeleri gelecek</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Tarif malzemeleri gelecek</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Tarif malzemeleri gelecek</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Tarif malzemeleri gelecek</div>
                        </div>
                    </div>
                </div>
                <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Tarif Detayı</a>
            </div>
        </div>
    </div>
</section>
<!-- end cart banner section -->

<!-- testimonail-section -->
<div class="testimonail-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <?php
                    $comments = $DB->getAll("comments", " WHERE state=?", array(1), "ORDER BY orderno ASC");

                    if ($comments) {
                        for ($i = 0; $i < count($comments); $i++) {
                    ?>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="assets/img/avaters/avatar1.png" alt="">
                        </div>
                        <div class="client-meta">
                            <h3><?= stripslashes($comments[$i]["title"]) ?>
                                <span><?= stripslashes($comments[$i]["description"]) ?></span>
                            </h3>
                            <p class="testimonial-body">
                                <?= $comments[$i]["texts"] ?>
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- end testimonail-section -->

<!-- advertisement section -->
<div class="abt-section mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="abt-bg">
                    <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-text">
                    <?php
                    $abouts = $DB->getAll("abouts", " WHERE state=?", array(1), "ORDER BY orderno ASC", 1);

                    ?>
                    <p class="top-sub"><?= stripslashes($abouts[0]["description"]) ?></p>
                    <h2><span class="orange-text"><?= stripslashes($abouts[0]["title"]) ?></span></h2>
                    <p><?= stripslashes($abouts[0]["texts"]) ?></p>
                    <a href="about.html" class="boxed-btn mt-4">Daha fazla bilgi için</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end advertisement section -->

<!-- latest news -->
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
            $news = $DB->getAll("news", " WHERE state=?", array(1), "ORDER BY orderno ASC", 3);
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
<!-- end latest news -->

<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src="<?= SITE ?>assets/img/company-logos/1.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="<?= SITE ?>assets/img/company-logos/2.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="<?= SITE ?>assets/img/company-logos/3.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="<?= SITE ?>assets/img/company-logos/4.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="<?= SITE ?>assets/img/company-logos/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel -->

<!-- footer -->
<?php
include_once(DATA . "footer.php");
?>
<!-- end footer -->