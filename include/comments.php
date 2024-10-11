<div class="testimonail-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <?php
                    $comments = $DB->getAll("comments", " WHERE state=?", array(1), "ORDER BY orderno ASC");

                    if ($comments) {
                        for ($i=0; $i < count($comments); $i++) { 
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