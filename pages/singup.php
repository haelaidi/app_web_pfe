<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscription</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../asset/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../asset/css/util.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/main.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">

<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.php">
                        <img src="../asset/images/icons/logo.png" alt="IMG-LOGO" data-logofixed="../asset/images/icons/logo2.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Title Page -->
<section class="flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(../asset/images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Inscription
    </h2>
</section>


<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <div class="t-center">
						<span class="tit2 t-center">
							Inscription
						</span>
                </div>

                <br>

                <form class="wrap-form-reservation size22 m-l-r-auto">

                    <div class="row">
                        <div class="col-md-4">
                            <!-- firstname -->
                            <span class="txt9">
									Nom
								</span>

                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="firstname" placeholder="Votre Nom">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Lastname -->
                            <span class="txt9">
									Prénom
								</span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="lastname" placeholder="Votre Prénom">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Phone -->
                            <span class="txt9">
									Téléphone
								</span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="N° Téléphone">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Email -->
                            <span class="txt9">
									Email
								</span>

                            <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Password -->
                            <span class="txt9">
									Mot de passe
								</span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password" placeholder="Votre mot de passe">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Password Confirmation -->
                            <span class="txt9">
									Confirmation mot de passe
								</span>

                            <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password_confirmation" placeholder="Confirmer votre mot de passe">
                            </div>
                        </div>

                    </div>

                    <div class="wrap-btn-booking flex-c-m m-t-6">
                        <!-- Button3 -->
                        <button type="submit" class="btn-outline-success flex-c-m size13 trans-0-4">
                            Inscription
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php include './component/footer.php' ?>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
<script type="text/javascript" src="../asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="../asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="../asset/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="../asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="../asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="../asset/vendor/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="../asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="../asset/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="../asset/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="../asset/vendor/parallax100/parallax100.js"></script>
<script type="text/javascript">
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="../asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="../asset/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script src="../asset/js/main.js"></script>

</body>
</html>
