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