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
                                <a href="shop.html" class="boxed-btn">Fruit Collection</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
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