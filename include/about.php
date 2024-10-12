<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>We sale fresh fruits</p>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- featured section -->
<div class="feature-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="featured-text">
                    <h2 class="pb-3">Niçin <span class="orange-text">Biz</span></h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-12 mb-md-12">
                            <div class="list-box d-flex">
                                <div class="content">
                                    <?php
									$abouts = $DB->getAll("abouts", " WHERE state=?", array(1), "ORDER BY orderno ASC", 1);

									?>
                                    <h3>
                                        <?= stripslashes($abouts[0]["title"]) ?>
                                    </h3>
                                    <p><?= $abouts[0]["texts"] ?></p>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end featured section -->