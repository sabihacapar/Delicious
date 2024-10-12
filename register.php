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
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <?php
                // Handle form submission
                if ($_POST) {
                    // Ensure all required fields are filled
                    if (!empty($_POST["namesurname"]) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
                        $namesurname = trim($DB->filter($_POST["namesurname"]));
                        $username = trim($DB->filter($_POST["username"]));
                        $email = trim($DB->filter($_POST["email"]));
                        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

                        //
                        $add = $DB->SqlWork(
                            "INSERT INTO users (namesurname, username, email, password, date) VALUES (?,?,?,?,?)",
                            array($namesurname, $username, $email, $password, date("Y-m-d")),
                            1
                        );


                        if ($add) { //
                ?>
                            <div class="alert alert-success">Kullanıcı ekleme işleminiz başarılı İşleminiz başarılı</div>
                            <meta http-equiv="refresh" content="3;url=<?= SITE ?>login">
                        <?php
                        } else {
                        ?>
                            <div class="alert alert-danger">Kaydederken sorun oluştu</div>
                            <meta http-equiv="refresh" content="10;">
                        <?php
                        } //
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
                        <input type="text" class="form-control" placeholder="Full name" name="namesurname">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
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
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

                <a href="login.html" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->


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