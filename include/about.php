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