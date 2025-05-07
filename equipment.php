<?php
session_start();
error_reporting(0);
include 'include/config.php';
$uid = $_SESSION['uid'];

if (isset($_POST['submit'])) {
	$pid = $_POST['pid'];


	$sql = "INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

	$query = $dbh->prepare($sql);
	$query->bindParam(':pid', $pid, PDO::PARAM_STR);
	$query->bindParam(':uid', $uid, PDO::PARAM_STR);
	$query->execute();
	echo "<script>alert('Package has been booked.');</script>";
	echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/nice-select.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/slicknav.min.css" />
	<link rel="stylesheet" href="css/animate.css" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css" />

</head>

<body>
	<!-- Page Preloder -->


	<!-- Header Section -->
	<?php include 'include/header.php'; ?>
	<!-- Header Section end -->




	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2> Equipment Gallery</h2>
				</div>
			</div>
		</div>
	</section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">

			<div class="row">

				<div class="col-lg-12 col-sm-6">
					<style>
						div.gallery {
							border: 1px solid #ccc;
						}

						div.gallery:hover {
							border: 1px solid #777;
						}

						div.gallery img {
							width: 100%;
							height: auto;
						}

						div.desc {
							padding: 15px;
							text-align: center;
						}

						* {
							box-sizing: border-box;
						}

						.responsive {
							padding: 0 6px;
							float: left;
							width: 24.99999%;
						}

						@media only screen and (max-width: 700px) {
							.responsive {
								width: 49.99999%;
								margin: 6px 0;
							}
						}

						@media only screen and (max-width: 500px) {
							.responsive {
								width: 100%;
							}
						}

						.clearfix:after {
							content: "";
							display: table;
							clear: both;
						}
					</style>



					<div class="responsive">
						<div class="gallery">
							<a target="_blank" href="img/g1.jpg">
								<img src="img/g1.jpg" alt="Cinque Terre" width="600" height="400">
							</a>
						</div>
					</div>

					<div class="responsive">
						<div class="gallery">
							<a target="_blank" href="img/g2.jpg">
								<img src="img/g2.jpg" alt="Cinque Terre" width="600" height="400">
							</a>

						</div>
					</div>

					<div class="responsive">
						<div class="gallery">
							<a target="_blank" href="img/g3.jpg">
								<img src="img/g3.jpg" alt="Cinque Terre" width="600" height="400">
							</a>
						</div>
					</div>

					<div class="responsive">
						<div class="gallery">
							<a target="_blank" href="img/g4.jpg">
								<img src="img/g4.jpg" alt="Cinque Terre" width="600" height="400">
							</a>
						</div>
					</div>

					<div class="responsive">
						<div class="gallery">
							<a target="_blank" href="img/g5.jpg">
								<img src="img/g5.jpg" alt="Cinque Terre" width="600" height="400">
							</a>
						</div>
					</div>
					<div class="responsive">
						<div class="gallery">
							<a target="_blank" href="img/g6.jpg">
								<img src="img/g6.jpg" alt="Cinque Terre" width="600" height="400">
							</a>
						</div>
					</div>
					<div class="responsive">
						<div class="gallery">
							<a target="_blank" href="img/g7.jpg">
								<img src="img/g7.jpg" alt="Cinque Terre" width="600" height="400">
							</a>
						</div>
					</div>
					<div class="responsive">
						<div class="gallery">
							<a target="_blank" href="img/g8.jpg">
								<img src="img/g8.jpg" alt="Cinque Terre" width="600" height="400">
							</a>
						</div>
					</div>
					<div class="clearfix"></div>


				</div>
			</div>
		</div>
	</section>


	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>