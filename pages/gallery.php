<!DOCTYPE html>
<html lang="en">
<head>
	<title>Galerie</title>
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

    <!-- Header -->
    <?php include './component/header.php' ?>

    <!-- Sidebar -->
    <?php include './component/sidebar.php' ?>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(../asset/images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
            Galerie
		</h2>
	</section>



	<!-- Gallery -->
	<div class="section-gallery p-t-118 p-b-100">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
                Toutes les photos
            </button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".interior">
                Intérieure
            </button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".food">
                Aliments
            </button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".events">
                Événements
            </button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".guests">
                Invités VIP
            </button>
		</div>

		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
				<img src="../asset/images/photo-gallery-13.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="../asset/images/photo-gallery-13.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="../asset/images/photo-gallery-14.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="../asset/images/photo-gallery-14.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
				<img src="../asset/images/photo-gallery-15.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="../asset/images/photo-gallery-15.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="../asset/images/photo-gallery-16.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="../asset/images/photo-gallery-16.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="../asset/images/photo-gallery-17.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="../asset/images/photo-gallery-17.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior guests">
				<img src="../asset/images/photo-gallery-18.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="../asset/images/photo-gallery-18.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
				<img src="../asset/images/photo-gallery-19.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="../asset/images/photo-gallery-19.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
				<img src="../asset/images/photo-gallery-20.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="../asset/images/photo-gallery-20.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
				<img src="../asset/images/photo-gallery-21.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="../asset/images/photo-gallery-21.jpg" data-lightbox="gallery"></a>
				</div>
			</div>
		</div>

		<div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
			<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
		</div>
	</div>


	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				Specials Sign up
			</span>

			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
			</div>

			<!-- Button3 -->
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				Sign-up
			</button>
		</form>
	</div>


	<!-- Footer -->
    <?php include './component/footer.php' ?>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



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
	<script type="text/javascript" src="../asset/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/js/main.js"></script>

</body>
</html>
