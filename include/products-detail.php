<?php
if (!empty($_GET["seflink"])) {
    $seflink = $DB->filter($_GET["seflink"]);
    $data = $DB->getAll("products", "WHERE seflink=? AND state=?", array($seflink, 1), "ORDER BY ID ASC", 1);
    if ($data) {

?>
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Organik Lezzetler</p>
                            <h1>Yeni Yemekler</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

        <!-- single product -->
        <div class="single-product mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="single-product-img">
                            <img src="<?= SITE ?>assets/img/products/product-img-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="single-product-content">
                            <h3><?= stripslashes($data[0]["title"]) ?></h3>
                            <p><?= stripslashes($data[0]["texts"]) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single product -->

        <!-- more products -->
        <div class="more-products mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h3><span class="orange-text">Bunlara da </span> Bakabilirsiniz</h3>
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
                                        <a href="single-product.html"><img src="<?= SITE ?>assets/img/products/product-img-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <h3><?= stripslashes($products[$i]["title"]) ?></h3>
                                    <a href="<?= SITE ?>products-detail/<?= $products[$i]["seflink"] ?>" class="cart-btn">Tarif Detayı
                                        İçin</a>
                                </div>
                            </div>
                    <?php
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
        <!-- end more products -->
<?php
    }
}
?>