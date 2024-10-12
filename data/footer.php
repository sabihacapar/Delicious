<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">Hakkımızda</h2>
                    <?php
                    $abouts = $DB->getAll("abouts", " WHERE state=?", array(1), "ORDER BY orderno ASC", 1);

                    ?>
                    <p><?= $abouts[0]["texts"] ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Bize Ulaşın</h2>
                    <ul>
                        <li> <?= $address ?></p>
                        </li>
                        <li><?= $email ?></li>
                        <li><?= $phone ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Sayfalar</h2>
                    <ul>
                        <li><a href="<?= SITE ?>">Anasayfa</a></li>
                        <li><a href="<?= SITE ?>about">Hakkımızda</a></li>
                        <li><a href="<?= SITE ?>products">Yemekler</a></li>
                        <li><a href="<?= SITE ?>news">Haberler</a></li>
                        <li><a href="<?= SITE ?>contact">İletişim</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title">Abonelik</h2>
                    <p>Güncel yemeklerden habrdar olmak için...</p>
                    <form action="index.html">
                        <input type="email" placeholder="Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>