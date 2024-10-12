<?php session_start(); //oturum işlemi başlatır. 
ob_start(); //yönlendirme ve bazı header işlemleri için 
define("DATA", "data/");
define("SAYFA", "include/");
define("CLASSES", "yonetimPaneli/class/");

include_once(DATA . "connection.php");
define("SITE", $websiteurl);

?>

<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Fruitkha</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= SITE ?>assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= SITE ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?= SITE ?>assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?= SITE ?>assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?= SITE ?>assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="<?= SITE ?>assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="<?= SITE ?>assets/css/register.css">
    <!-- responsive -->
    <link rel="stylesheet" href="<?= SITE ?>assets/css/responsive.css">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->


    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>İNCE </b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Giriş Yap</p>
                <?php
                if ($_POST) {
                    if (trim($_POST["username"]) !== '' && trim($_POST["password"]) !== '') {
                        $email = trim($DB->filter($_POST["username"]));
                        $password = trim($DB->filter($_POST["password"]));

                        // Veritabanından kullanıcıyı çek
                        $control = $DB->getAll("users", " WHERE username=?", array($email), "ORDER BY ID ASC", 1);

                        // Kullanıcı bulunduysa şifreyi doğrula
                        if ($control && password_verify(trim($DB->filter($_POST["password"])), $control[0]["password"])) {
                            $_SESSION["username"] = $control[0]["username"];
                            $_SESSION["namesurname"] = $control[0]["namesurname"];
                            $_SESSION["email"] = $control[0]["email"];
                            $_SESSION["id"] = $control[0]["id"];
                ?>
                            <div class="alert alert-success">Giriş İşleminiz başarılı...</div>
                            <meta http-equiv="refresh" content="2;url=<?= SITE ?>">
                        <?php
                            exit(); //otomatik olarak program sonlanır
                        } else {
                        ?>
                            <div class="alert alert-danger">Kullanıcı adı veya şifre hatalı</div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-danger">Lütfen tüm alanları doldurunuz</div>
                        <meta http-equiv="refresh" content="3;">
                <?php
                    }
                }
                ?>


                <form action="" method="post">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>


                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                    </div>
                    <!-- /.col -->
            </div>
            </form>



            <p class="mb-0">
                <a href="<?= SITE ?>register" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= SITE ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= SITE ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= SITE ?>dist/js/adminlte.min.js"></script>
    <!-- copyright -->
    <!-- footer -->


    <!-- end copyright -->

    <!-- jquery -->
    <script src="<?= SITE ?>assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="<?= SITE ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="<?= SITE ?>assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="<?= SITE ?>assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="<?= SITE ?>assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="<?= SITE ?>assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="<?= SITE ?>assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="<?= SITE ?>assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="<?= SITE ?>assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="<?= SITE ?>assets/js/main.js"></script>

</body>

</html>