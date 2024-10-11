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
            $products = $DB->getAll("products", " WHERE state=?", array(1), "ORDER BY orderno ASC");
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