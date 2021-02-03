<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php echo $detail[0]->KONF_WEB_JUDUL; ?>, <?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA; ?> dan <?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA; ?></title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<meta property="og:title" content="<?php if (empty($link)) {
											echo "";
										} else {
											echo "To :" . $link[0]->UNDANGAN_KEPADA . " | ";
										} ?>
										<?php echo $detail[0]->KONF_WEB_JUDUL; ?>, <?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA; ?> & <?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA; ?>">
	<meta property="og:description" content="Turut mengundang teman-teman, sahabat dan keluarga menyaksikan pengesahan kisah cinta Kami">
	<meta property="og:image" content="https://get-married.site/uploads/cover/<?php echo $detail[0]->KONF_WEB_SAMPUL ?>">

	<meta property="twitter:title" content="<?php echo $detail[0]->KONF_WEB_JUDUL; ?>, <?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA; ?> & <?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA; ?>">
	<meta property="twitter:description" content="Turut mengundang teman-teman, sahabat dan keluarga menyaksikan pengesahan kisah cinta Kami">
	<meta property="twitter:image" content="https://get-married.site/uploads/cover/<?php echo $detail[0]->KONF_WEB_SAMPUL ?>">
	<meta name="twitter:card" content="summary_large_image">

	<meta data-rh="true" name="description" content="Turut mengundang teman-teman, sahabat dan keluarga menyaksikan pengesahan kisah cinta Kami" />


	<!-- Favicons -->
	<link href="<?php echo base_url(); ?>assets/theme/assets/img/favicon.png" rel="icon">
	<link href="<?php echo base_url(); ?>assets/theme/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=<?php echo str_replace(" ", "+", $detail[0]->KONF_WEB_FONT); ?>:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=<?php echo str_replace(" ", "+", $detail[0]->KONF_WEB_FONT_JUDUL); ?>:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=<?php echo str_replace(" ", "+", $detail[0]->KONF_WEB_FONT_INTRO); ?>:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url(); ?>assets/theme/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/theme/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/theme/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/theme/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/theme/assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/theme/assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/theme/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/aos/aos.css" />
	<!-- Template Main CSS File -->
	<!-- <link href="<?php echo base_url(); ?>assets/theme/assets/css/style.css" rel="stylesheet"> -->

	<!-- =======================================================
  * Template Name: Tempo - v2.2.1
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
	/**
* Template Name: Tempo - v2.2.1
* Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

	/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
	body {
		font-family: "<?php echo $detail[0]->KONF_WEB_FONT ?>", sans-serif;
		color: #444444;
	}

	a {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	a:hover {
		color: #ea6981;
		text-decoration: none;
	}

	/* h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		font-family: "Nunito", sans-serif;
	} */

	/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
	.musik {
		position: fixed;
		/* display: none; */
		right: 15px;
		bottom: 30px;
		z-index: 99999;
		transition: 0.5s;
	}

	.back-to-top {
		position: fixed;
		display: none;
		right: 15px;
		bottom: 80px;
		z-index: 99999;
		transition: 0.5s;
	}

	.musik i {
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 18px;
		width: 40px;
		height: 40px;
		border-radius: 50px;
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
		transition: all 0.4s;
	}

	.back-to-top i {
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 18px;
		width: 40px;
		height: 40px;
		border-radius: 50px;
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
		transition: all 0.4s;
	}

	/* .back-to-top:hover {
		bottom: 19px;
	} */

	/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
	#header {
		transition: all 0.5s;
		z-index: 997;
		padding: 20px 0;
	}

	#header .logo {
		font-size: 32px;
		margin: 0;
		padding: 0;
		line-height: 1;
		font-weight: 600;
		letter-spacing: 1px;
		font-family: "<?php echo $detail[0]->KONF_WEB_FONT_JUDUL ?>", sans-serif;
	}

	#header .logo a {
		color: #fff;
	}

	#header .logo img {
		max-height: 40px;
	}

	#header.header-scrolled,
	#header.header-inner-pages {
		background: #fff;
		box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
		padding: 12px 0;
	}

	#header.header-scrolled .logo a,
	#header.header-inner-pages .logo a {
		color: #263238;
	}

	@media (max-width: 992px) {
		#header .logo {
			font-size: 28px;
		}
	}

	/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
	/* Desktop Navigation */
	.nav-menu ul {
		margin: 0;
		padding: 0;
		list-style: none;
	}

	.nav-menu>ul {
		display: flex;
	}

	.nav-menu>ul>li {
		position: relative;
		white-space: nowrap;
		padding: 10px 0 10px 25px;
	}

	.nav-menu a {
		display: block;
		position: relative;
		color: #fff;
		transition: 0.3s;
		font-size: 15px;
		padding: 0 4px;
		letter-spacing: 0.4px;
		font-family: "<?php echo $detail[0]->KONF_WEB_FONT_JUDUL ?>", sans-serif;
	}

	.nav-menu>ul>li>a:before {
		content: "";
		position: absolute;
		width: 100%;
		height: 2px;
		bottom: -6px;
		left: 0;
		background-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		visibility: hidden;
		transform: scaleX(0);
		transition: all 0.3s ease-in-out 0s;
	}

	.nav-menu a:hover:before,
	.nav-menu li:hover>a:before,
	.nav-menu .active>a:before {
		visibility: visible;
		transform: scaleX(1);
	}

	.nav-menu .drop-down ul {
		display: block;
		position: absolute;
		left: 0;
		top: calc(100% + 30px);
		z-index: 99;
		opacity: 0;
		visibility: hidden;
		padding: 10px 0;
		background: #fff;
		box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
		transition: 0.3s;
	}

	.nav-menu .drop-down:hover>ul {
		opacity: 1;
		top: 100%;
		visibility: visible;
	}

	.nav-menu .drop-down li {
		min-width: 180px;
		position: relative;
	}

	.nav-menu .drop-down ul a {
		padding: 10px 20px;
		font-size: 14px;
		text-transform: none;
		color: #263238;
	}

	.nav-menu .drop-down ul a:hover,
	.nav-menu .drop-down ul .active>a,
	.nav-menu .drop-down ul li:hover>a {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.nav-menu .drop-down>a:after {
		content: "\ea99";
		font-family: IcoFont;
		padding-left: 5px;
	}

	.nav-menu .drop-down .drop-down ul {
		top: 0;
		left: calc(100% - 30px);
	}

	.nav-menu .drop-down .drop-down:hover>ul {
		opacity: 1;
		top: 0;
		left: 100%;
	}

	.nav-menu .drop-down .drop-down>a {
		padding-right: 35px;
	}

	.nav-menu .drop-down .drop-down>a:after {
		content: "\eaa0";
		font-family: IcoFont;
		position: absolute;
		right: 15px;
	}

	.header-scrolled .nav-menu>ul>li>a,
	.header-inner-pages .nav-menu>ul>li>a {
		color: #263238;
	}

	@media (max-width: 1366px) {
		.nav-menu .drop-down .drop-down ul {
			left: -90%;
		}

		.nav-menu .drop-down .drop-down:hover>ul {
			left: -100%;
		}

		.nav-menu .drop-down .drop-down>a:after {
			content: "\ea9d";
		}
	}

	/* Mobile Navigation */
	.mobile-nav-toggle {
		position: fixed;
		right: 15px;
		top: 15px;
		z-index: 9998;
		border: 0;
		background: none;
		font-size: 24px;
		transition: all 0.4s;
		outline: none !important;
		line-height: 1;
		cursor: pointer;
		text-align: right;
	}

	.mobile-nav-toggle i {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.mobile-nav {
		position: fixed;
		top: 55px;
		right: 15px;
		bottom: 15px;
		left: 15px;
		z-index: 9999;
		overflow-y: auto;
		background: #fff;
		transition: ease-in-out 0.2s;
		opacity: 0;
		visibility: hidden;
		border-radius: 10px;
		padding: 10px 0;
	}

	.mobile-nav * {
		margin: 0;
		padding: 0;
		list-style: none;
	}

	.mobile-nav a {
		display: block;
		position: relative;
		color: #263238;
		padding: 10px 20px;
		font-weight: 500;
		outline: none;
	}

	.mobile-nav a:hover,
	.mobile-nav .active>a,
	.mobile-nav li:hover>a {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		text-decoration: none;
	}

	.mobile-nav .drop-down>a:after {
		content: "\ea99";
		font-family: IcoFont;
		padding-left: 10px;
		position: absolute;
		right: 15px;
	}

	.mobile-nav .active.drop-down>a:after {
		content: "\eaa1";
	}

	.mobile-nav .drop-down>a {
		padding-right: 35px;
	}

	.mobile-nav .drop-down ul {
		display: none;
		overflow: hidden;
	}

	.mobile-nav .drop-down li {
		padding-left: 20px;
	}

	.mobile-nav-overly {
		width: 100%;
		height: 100%;
		z-index: 9997;
		top: 0;
		left: 0;
		position: fixed;
		background: rgba(45, 37, 38, 0.6);
		overflow: hidden;
		display: none;
		transition: ease-in-out 0.2s;
	}

	.mobile-nav-active {
		overflow: hidden;
	}

	.mobile-nav-active .mobile-nav {
		opacity: 1;
		visibility: visible;
	}

	.mobile-nav-active .mobile-nav-toggle i {
		color: #fff;
	}

	/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
	#hero {
		width: 100%;
		height: 100vh;
		background: url("https://get-married.site/uploads/cover/<?php echo $detail[0]->KONF_WEB_SAMPUL ?>") top center;
		background-size: cover;
		position: relative;
	}

	#hero:before {
		content: "";
		background: linear-gradient(to bottom, rgba(<?php echo $detail[0]->KONF_WEB_WARNA_RGB; ?>, 0.5), rgba(0, 0, 0, 0.3));
		position: absolute;
		bottom: 0;
		top: 0;
		left: 0;
		right: 0;
	}

	#hero .hero-container {
		position: absolute;
		bottom: 0;
		top: 0;
		left: 0;
		right: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		text-align: center;
		padding: 0 15px;
	}

	#hero h3 {
		background: rgba(255, 255, 255, 0.1);
		color: #fff;
		font-size: 26px;
		padding: 10px 30px;
		margin-bottom: 30px;
		border-radius: 50px;

	}

	#hero h1 {
		margin: 0 0 10px 0;
		font-size: 60px;
		font-weight: 700;
		line-height: 56px;
		color: #fff;
		font-family: "<?php echo $detail[0]->KONF_WEB_FONT_INTRO ?>", sans-serif;
	}

	#hero h1 span {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	#hero h2 {
		color: #eee;
		margin-bottom: 40px;
		font-size: 18px;
		font-weight: bold;
		padding: 0 100px 0 100px;
	}

	#hero .btn-get-started {
		font-family: "<?php echo $detail[0]->KONF_WEB_FONT_JUDUL ?>", sans-serif;
		/* text-transform: uppercase; */
		font-weight: 400;
		letter-spacing: 1px;
		display: inline-block;
		padding: 8px 30px 9px 30px;
		border-radius: 50px;
		transition: 0.5s;
		border: 2px solid #fff;
		color: #fff;
	}

	#hero .btn-get-started:hover {
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		border: 2px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	@media (min-width: 1024px) {
		#hero {
			background-attachment: fixed;
		}
	}

	@media (max-width: 768px) {
		#hero h3 {
			font-size: 22px;
		}

		#hero h1 {
			font-size: 50px;
			line-height: 36px;
		}

		#hero h2 {
			font-size: 15px;
			line-height: 24px;
			margin-bottom: 30px;
			padding: 0 0 0 0;
		}
	}

	@media (max-height: 500px) {
		#hero {
			height: 150vh;
		}
	}

	/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
	section {
		padding: 60px 0;
	}

	.section-bg {
		background-color: #f5f5f5;
	}


	.section-title {
		text-align: center;
		padding-bottom: 30px;
	}

	.section-title h2 {
		font-size: 13px;
		letter-spacing: 1px;
		font-weight: 700;
		padding: 8px 20px;
		line-height: 1;
		margin: 0;
		background: #fdeff2;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		display: inline-block;
		text-transform: uppercase;
		border-radius: 50px;
		margin-top: 20px;

	}

	.section-title h3 {
		margin: 15px 0 0 0;
		font-size: 32px;
		font-weight: 700;
		font-family: "<?php echo $detail[0]->KONF_WEB_FONT_JUDUL ?>", sans-serif;
	}

	.section-title h3 span {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.section-title p {
		margin: auto auto 0 auto;
		font-weight: 600;
	}

	@media (min-width: 1024px) {
		.section-title p {
			width: 50%;
		}
	}

	/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
	.about .content h3 {
		font-weight: 600;
		font-size: 26px;
	}

	.about .content ul {
		list-style: none;
		padding: 0;
	}

	.about .content ul li {
		padding-left: 28px;
		position: relative;
	}

	.about .content ul li+li {
		margin-top: 10px;
	}

	.about .content ul i {
		position: absolute;
		left: 0;
		top: 2px;
		font-size: 20px;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		line-height: 1;
	}

	.about .content p:last-child {
		margin-bottom: 0;
		font-size: 18px;
	}

	.about .content .btn-learn-more {
		font-family: "<?php echo $detail[0]->KONF_WEB_FONT ?>", sans-serif;
		font-weight: 600;
		font-size: 14px;
		letter-spacing: 1px;
		display: inline-block;
		padding: 12px 32px;
		border-radius: 50px;
		transition: 0.3s;
		line-height: 1;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		-webkit-animation-delay: 0.8s;
		animation-delay: 0.8s;
		margin-top: 6px;
		margin-left: auto;
		margin-right: auto;
		border: 2px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.about .content .btn-learn-more:hover {
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
		text-decoration: none;
	}

	/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
	.services {
		padding-bottom: 0px;
	}

	.services .icon-box {
		padding: 60px 30px;
		position: relative;
		overflow: hidden;
		background: #fff;
		box-shadow: 2px 0 35px 0 rgba(68, 88, 144, 0.12);
		transition: all 0.3s ease-in-out;
		border-radius: 8px;
		z-index: 1;
		text-align: center;
	}

	.services .icon-box::before {
		content: '';
		position: absolute;
		background: #fdeff2;
		right: 0;
		left: 0;
		bottom: 0;
		top: 100%;
		transition: all 0.4s;
		z-index: -1;
	}

	.services .icon-box:hover::before {
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		top: 0;
		border-radius: 0px;
	}

	.services .icon {
		margin-bottom: 15px;
	}

	.services .icon i {
		font-size: 48px;
		line-height: 1;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		transition: all 0.3s ease-in-out;
	}

	.services .title {
		font-weight: 700;
		margin-bottom: 15px;
		font-size: 18px;
	}

	.services .title a {
		color: #111;
	}

	.services .description {
		font-size: 15px;
		line-height: 28px;
		margin-bottom: 0;
	}

	.services .icon-box:hover .title a,
	.services .icon-box:hover .description {
		color: #fff;
	}

	.services .icon-box:hover .icon i {
		color: #fff;
	}

	/*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/
	.features {
		padding-top: 0;
	}

	.features .icon-box {
		padding: 20px;
		transition: ease-in-out 0.3s;
		box-shadow: 2px 0 35px 0 rgba(68, 88, 144, 0.12);
		text-align: center;
	}

	.features .icon-box i {
		font-size: 32px;
		padding-bottom: 20px;

	}

	.features .icon-box h3 {
		font-weight: 700;
		margin: 0;
		padding: 0;
		line-height: 1;
		font-size: 16px;
	}

	.features .icon-box h3 a {
		color: #263238;
		transition: ease-in-out 0.3s;
	}

	.features .icon-box:hover a {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
	.cta {
		background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("<?php echo base_url(); ?>assets/theme/assets/img/cta-bg.jpg") center center;
		background-size: cover;
		padding: 60px 0;
	}

	.cta h3 {
		color: #fff;
		font-size: 28px;
		font-weight: 700;
	}

	.cta p {
		color: #fff;
	}

	.cta .cta-btn {
		font-family: "Nunito", sans-serif;
		text-transform: uppercase;
		font-weight: 500;
		font-size: 16px;
		letter-spacing: 1px;
		display: inline-block;
		padding: 8px 28px;
		border-radius: 25px;
		transition: 0.5s;
		margin-top: 10px;
		border: 2px solid #fff;
		color: #fff;
	}

	.cta .cta-btn:hover {
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		border: 2px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	@media (min-width: 1024px) {
		.cta {
			background-attachment: fixed;
		}
	}

	/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
	.portfolio #portfolio-flters {
		padding: 0;
		margin: 0 auto 25px auto;
		list-style: none;
		text-align: center;
		border-radius: 50px;
	}

	.portfolio #portfolio-flters li {
		cursor: pointer;
		display: inline-block;
		padding: 7px 17px 9px 17px;
		font-size: 14px;
		font-weight: 500;
		line-height: 1;
		color: #444444;
		margin: 0 3px 10px 3px;
		transition: all ease-in-out 0.3s;
		background: #ede9e9;
		border-radius: 50px;
	}

	.portfolio #portfolio-flters li:hover,
	.portfolio #portfolio-flters li.filter-active {
		color: #fff;
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.portfolio #portfolio-flters li:last-child {
		margin-right: 0;
	}

	.portfolio .portfolio-item {
		margin-bottom: 30px;
		overflow: hidden;
	}

	.portfolio .portfolio-item img {
		position: relative;
		top: 0;
		transition: all 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
	}

	.portfolio .portfolio-item .portfolio-info {
		opacity: 0;
		position: absolute;
		left: 15px;
		right: 15px;
		bottom: -50px;
		z-index: 3;
		transition: all ease-in-out 0.3s;
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		padding: 15px 20px;
	}

	.portfolio .portfolio-item .portfolio-info h4 {
		font-size: 18px;
		color: #fff;
		font-weight: 600;
	}

	.portfolio .portfolio-item .portfolio-info p {
		color: #fff;
		font-size: 14px;
		margin-bottom: 0;
	}

	.portfolio .portfolio-item .portfolio-info .preview-link,
	.portfolio .portfolio-item .portfolio-info .details-link {
		position: absolute;
		right: 50px;
		font-size: 24px;
		top: calc(50% - 18px);
		color: white;
		transition: ease-in-out 0.3s;
	}

	.portfolio .portfolio-item .portfolio-info .preview-link:hover,
	.portfolio .portfolio-item .portfolio-info .details-link:hover {
		color: #f7c2cc;
	}

	.portfolio .portfolio-item .portfolio-info .details-link {
		right: 15px;
	}

	.portfolio .portfolio-item:hover img {
		top: -30px;
	}

	.portfolio .portfolio-item:hover .portfolio-info {
		opacity: 1;
		bottom: 0;
	}

	/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
	.pricing .box {
		padding: 20px;
		background: #f9f9f9;
		text-align: center;
		border-radius: 8px;
		position: relative;
		overflow: hidden;
		border: 2px solid #f9f9f9;
	}

	.pricing .box h3 {
		font-weight: 400;
		padding: 15px;
		margin-top: 15px;
		font-size: 30px;
		font-weight: 600;
		color: #263238;
		font-family: "<?php echo $detail[0]->KONF_WEB_FONT_JUDUL ?>", sans-serif;
	}

	.pricing .box h4 {
		font-size: 42px;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		font-weight: 500;
		font-family: "Open Sans", sans-serif;
		margin-bottom: 20px;
	}

	.pricing .box h4 sup {
		font-size: 20px;
		top: -15px;
		left: -3px;
	}

	.pricing .box h4 span {
		color: #bababa;
		font-size: 16px;
		font-weight: 300;
	}

	.pricing .box ul {
		padding: 0;
		list-style: none;
		color: #263238;
		text-align: center;
		line-height: 20px;
		font-size: 14px;
	}

	.pricing .box ul li {
		padding-bottom: 16px;
	}

	.pricing .box ul i {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		font-size: 18px;
		padding-right: 4px;
	}

	.pricing .box ul .na {
		color: #ccc;
		text-decoration: line-through;
	}

	.pricing .box .btn-wrap {
		padding: 15px;
		text-align: center;
	}

	.pricing .box .btn-buy {
		display: inline-block;
		padding: 8px 40px 10px 40px;
		border-radius: 50px;
		border: 2px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		font-size: 14px;
		font-weight: 400;
		font-family: "Nunito", sans-serif;
		font-weight: 600;
		transition: 0.3s;
	}

	.pricing .box .btn-buy:hover {
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
	}

	.pricing .recommended {
		border-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.pricing .recommended .btn-buy {
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
	}

	.pricing .recommended .btn-buy:hover {
		background: #d91e42;
		border-color: #d91e42;
	}

	.pricing .recommended-badge {
		position: absolute;
		top: 5px;
		left: 50%;
		transform: translateX(-50%);
		z-index: 1;
		font-size: 13px;
		padding: 3px 25px 6px 25px;
		background: #fce6ea;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		border-radius: 50px;
	}

	/*--------------------------------------------------------------
# F.A.Q
--------------------------------------------------------------*/
	.faq {
		padding: 60px 0;
	}

	.faq .faq-list {
		padding: 0;
		list-style: none;
	}

	.faq .faq-list li {
		padding: 0 0 20px 0;
		text-align: center;
	}

	.faq .faq-list a {
		display: block;
		position: relative;
		font-family: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		font-size: 20px;
		font-weight: 700;
	}

	.faq .faq-list i {
		font-size: 18px;
		position: absolute;
		left: -25px;
		top: 6px;
	}

	.faq .faq-list p {
		margin-bottom: 20px;
		font-size: 15px;
	}

	.faq .faq-list a.collapse {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.faq .faq-list a.collapsed {
		color: #343a40;
	}

	.faq .faq-list a.collapsed:hover {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.faq .faq-list a.collapsed i::before {
		content: "\eab2" !important;
	}

	@media (min-width: 1280px) {
		.faq .container {
			padding: 0 120px;
		}
	}

	/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
	.team {
		/* background: #fff; */
		padding: 60px 0;
	}

	.team .member {
		margin-bottom: 20px;
		overflow: hidden;
		text-align: center;
		border-radius: 5px;
		background: #fff;
		box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
	}

	.team .member .member-img {
		position: relative;
		overflow: hidden;
	}

	.team .member .social {
		position: absolute;
		left: 0;
		bottom: 0;
		right: 0;
		height: 40px;
		opacity: 0;
		transition: ease-in-out 0.3s;
		text-align: center;
		background: rgba(255, 255, 255, 0.85);
	}

	.team .member .social a {
		transition: color 0.3s;
		color: #263238;
		margin: 0 10px;
		padding-top: 8px;
		display: inline-block;
	}

	.team .member .social a:hover {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.team .member .social i {
		font-size: 18px;
		margin: 0 2px;
	}

	.team .member .member-info {
		padding: 25px 15px;
	}

	.team .member .member-info h2 {
		font-weight: 700;
		margin-bottom: 5px;
		font-size: 30px;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		font-family: "<?php echo $detail[0]->KONF_WEB_FONT_JUDUL ?>", sans-serif;
	}

	.team .member .member-info span {
		display: block;
		font-size: 18px;
		font-weight: 400;
		color: #263238;
	}

	.team .member .member-info p {
		font-style: italic;
		font-size: 14px;
		line-height: 26px;
		color: #777777;
	}

	.team .member:hover .social {
		opacity: 1;
	}

	/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
	.contact .info {
		width: 100%;
		background: #fff;
	}

	.contact .info i {
		font-size: 20px;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		float: left;
		width: 44px;
		height: 44px;
		background: #fdeff2;
		display: flex;
		justify-content: center;
		align-items: center;
		border-radius: 50px;
		transition: all 0.3s ease-in-out;
	}

	.contact .info h4 {
		padding: 0 0 0 60px;
		font-size: 22px;
		font-weight: 600;
		margin-bottom: 5px;
		color: #263238;
	}

	.contact .info p {
		padding: 0 0 0 60px;
		margin-bottom: 0;
		font-size: 14px;
		color: #816a6e;
	}

	.contact .info .email,
	.contact .info .phone {
		margin-top: 40px;
	}

	.contact .info .email:hover i,
	.contact .info .address:hover i,
	.contact .info .phone:hover i {
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
	}

	.contact .php-email-form {
		width: 100%;
		background: #fff;
	}

	.contact .php-email-form .form-group {
		padding-bottom: 8px;
	}

	.contact .php-email-form .validate {
		display: none;
		color: red;
		margin: 0 0 15px 0;
		font-weight: 400;
		font-size: 13px;
	}

	.contact .php-email-form .error-message {
		display: none;
		color: #fff;
		background: #ed3c0d;
		text-align: left;
		padding: 15px;
		font-weight: 600;
	}

	.contact .php-email-form .error-message br+br {
		margin-top: 25px;
	}

	.contact .php-email-form .sent-message {
		display: none;
		color: #fff;
		background: #18d26e;
		text-align: center;
		padding: 15px;
		font-weight: 600;
	}

	.contact .php-email-form .loading {
		display: none;
		background: #fff;
		text-align: center;
		padding: 15px;
	}

	.contact .php-email-form .loading:before {
		content: "";
		display: inline-block;
		border-radius: 50%;
		width: 24px;
		height: 24px;
		margin: 0 10px -6px 0;
		border: 3px solid #18d26e;
		border-top-color: #eee;
		-webkit-animation: animate-loading 1s linear infinite;
		animation: animate-loading 1s linear infinite;
	}

	.contact .php-email-form input,
	.contact .php-email-form textarea {
		border-radius: 0;
		box-shadow: none;
		font-size: 14px;
	}

	.contact .php-email-form input:focus,
	.contact .php-email-form textarea:focus {
		border-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.contact .php-email-form input {
		height: 44px;
	}

	.contact .php-email-form textarea {
		padding: 10px 12px;
	}

	.contact .php-email-form button[type="submit"] {
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		border: 0;
		padding: 10px 28px;
		color: #fff;
		transition: 0.4s;
		border-radius: 50px;
	}

	.contact .php-email-form button[type="submit"]:hover {
		background: #d01d3f;
	}

	@-webkit-keyframes animate-loading {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

	@keyframes animate-loading {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

	/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
	.breadcrumbs {
		padding: 15px 0;
		background: #f6f4f4;
		margin-top: 67px;
	}

	@media (max-width: 992px) {
		.breadcrumbs {
			margin-top: 50px;
		}
	}

	.breadcrumbs h2 {
		font-size: 26px;
		font-weight: 600;
	}

	.breadcrumbs ol {
		display: flex;
		flex-wrap: wrap;
		list-style: none;
		padding: 0 0 10px 0;
		margin: 0;
		font-size: 14px;
	}

	.breadcrumbs ol li+li {
		padding-left: 10px;
	}

	.breadcrumbs ol li+li::before {
		display: inline-block;
		padding-right: 10px;
		color: #655356;
		content: "/";
	}

	/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
	.portfolio-details {
		padding-top: 40px;
	}

	.portfolio-details .portfolio-details-container {
		position: relative;
	}

	.portfolio-details .portfolio-details-carousel {
		position: relative;
		z-index: 1;
	}

	.portfolio-details .portfolio-details-carousel .owl-nav,
	.portfolio-details .portfolio-details-carousel .owl-dots {
		margin-top: 5px;
		text-align: left;
	}

	.portfolio-details .portfolio-details-carousel .owl-dot {
		display: inline-block;
		margin: 0 10px 0 0;
		width: 12px;
		height: 12px;
		border-radius: 50%;
		background-color: #ddd !important;
	}

	.portfolio-details .portfolio-details-carousel .owl-dot.active {
		background-color: <?php echo $detail[0]->KONF_WEB_WARNA ?> !important;
	}

	.portfolio-details .portfolio-info {
		padding: 30px;
		position: absolute;
		right: 0;
		bottom: -70px;
		background: #fff;
		box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
		z-index: 2;
	}

	.portfolio-details .portfolio-info h3 {
		font-size: 22px;
		font-weight: 700;
		margin-bottom: 20px;
		padding-bottom: 20px;
		border-bottom: 1px solid #eee;
	}

	.portfolio-details .portfolio-info ul {
		list-style: none;
		padding: 0;
		font-size: 15px;
	}

	.portfolio-details .portfolio-info ul li+li {
		margin-top: 10px;
	}

	.portfolio-details .portfolio-description {
		padding-top: 50px;
	}

	.portfolio-details .portfolio-description h2 {
		width: 50%;
		font-size: 26px;
		font-weight: 700;
		margin-bottom: 20px;
	}

	.portfolio-details .portfolio-description p {
		padding: 0 0 0 0;
	}

	@media (max-width: 768px) {
		.portfolio-details .portfolio-info {
			position: static;
			margin-top: 30px;
		}
	}

	/*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
	.blog {
		padding: 40px 0 20px 0;
	}

	.blog .entry {
		padding: 20px;
		margin-bottom: 60px;
		overflow: hidden;
		box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
	}

	.blog .entry .entry-img {
		max-height: 400px;
		margin: -20px -20px 20px -20px;
		overflow: hidden;
	}

	.blog .entry .entry-title {
		font-size: 20px;
		line-height: 26px;
		font-weight: bold;
		padding: 0;
		margin: 0 0 20px 0;
	}

	.blog .entry .entry-title a {
		color: #263238;
		transition: 0.3s;
	}

	.blog .entry .entry-title a:hover {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.blog .entry .entry-meta {
		color: #9a8487;
	}

	.blog .entry .entry-meta ul {
		display: flex;
		flex-wrap: wrap;
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.blog .entry .entry-meta ul li {
		margin-bottom: 15px;
	}

	.blog .entry .entry-meta ul li+li {
		padding-left: 15px;
	}

	.blog .entry .entry-meta i {
		font-size: 14px;
		padding-right: 4px;
	}

	.blog .entry .entry-meta a {
		color: #9a8487;
		font-size: 14px;
		display: inline-block;
		line-height: 1;
	}

	.blog .entry .entry-content p {
		line-height: 24px;
		font-size: 15px;
	}

	.blog .entry .entry-content .read-more {
		-moz-text-align-last: right;
		text-align-last: right;
	}

	.blog .entry .entry-content .read-more a {
		display: inline-block;
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
		padding: 5px 20px 7px 20px;
		transition: 0.3s;
		font-size: 14px;
		border-radius: 50px;
	}

	.blog .entry .entry-content .read-more a:hover {
		background: #d01d3f;
	}

	.blog .entry .entry-content h3 {
		font-size: 22px;
		margin-top: 30px;
		font-weight: bold;
	}

	.blog .entry .entry-content blockquote {
		overflow: hidden;
		background-color: #fafafa;
		padding: 60px;
		position: relative;
		text-align: center;
		margin: 20px 0;
	}

	.blog .entry .entry-content blockquote p {
		color: #444444;
		line-height: 1.6;
		margin-bottom: 0;
		font-style: italic;
		font-weight: 500;
		font-size: 22px;
	}

	.blog .entry .entry-content blockquote .quote-left {
		position: absolute;
		left: 20px;
		top: 20px;
		font-size: 36px;
		color: #e7e7e7;
	}

	.blog .entry .entry-content blockquote .quote-right {
		position: absolute;
		right: 20px;
		bottom: 20px;
		font-size: 36px;
		color: #e7e7e7;
	}

	.blog .entry .entry-content blockquote::after {
		content: '';
		position: absolute;
		left: 0;
		top: 0;
		bottom: 0;
		width: 3px;
		background-color: #263238;
		margin-top: 20px;
		margin-bottom: 20px;
	}

	.blog .entry .entry-footer {
		padding-top: 10px;
		border-top: 1px solid #e6e6e6;
	}

	.blog .entry .entry-footer i {
		color: #9a8487;
		display: inline;
	}

	.blog .entry .entry-footer a {
		color: #c3b6b8;
		transition: 0.3s;
	}

	.blog .entry .entry-footer a:hover {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.blog .entry .entry-footer .cats {
		list-style: none;
		display: inline;
		padding: 0 20px 0 0;
		font-size: 14px;
	}

	.blog .entry .entry-footer .cats li {
		display: inline-block;
	}

	.blog .entry .entry-footer .tags {
		list-style: none;
		display: inline;
		padding: 0;
		font-size: 14px;
	}

	.blog .entry .entry-footer .tags li {
		display: inline-block;
	}

	.blog .entry .entry-footer .tags li+li::before {
		padding-right: 6px;
		color: #6c757d;
		content: ",";
	}

	.blog .entry .entry-footer .share {
		font-size: 16px;
	}

	.blog .entry .entry-footer .share i {
		padding-left: 5px;
	}

	.blog .entry-single {
		margin-bottom: 30px;
	}

	.blog .entry-single .entry-title {
		font-size: 36px;
		line-height: 42px;
	}

	.blog .blog-author {
		padding: 20px;
		margin-bottom: 30px;
		box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
	}

	.blog .blog-author img {
		width: 120px;
	}

	.blog .blog-author h4 {
		margin-left: 140px;
		font-weight: 600;
		font-size: 22px;
		margin-bottom: 0px;
		padding: 0;
	}

	.blog .blog-author .social-links {
		margin: 0 0 5px 140px;
	}

	.blog .blog-author .social-links a {
		color: #b1a0a3;
	}

	.blog .blog-author p {
		margin-left: 140px;
		font-style: italic;
		color: #b7b7b7;
	}

	.blog .blog-comments {
		margin-bottom: 30px;
	}

	.blog .blog-comments .comments-count {
		font-weight: bold;
	}

	.blog .blog-comments .comment {
		margin-top: 30px;
		position: relative;
	}

	.blog .blog-comments .comment .comment-img {
		width: 50px;
	}

	.blog .blog-comments .comment h5 {
		margin-left: 65px;
		font-size: 16px;
		margin-bottom: 2px;
	}

	.blog .blog-comments .comment h5 a {
		font-weight: bold;
		color: #444444;
		transition: 0.3s;
	}

	.blog .blog-comments .comment h5 a:hover {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.blog .blog-comments .comment h5 .reply {
		padding-left: 10px;
		color: #263238;
	}

	.blog .blog-comments .comment time {
		margin-left: 65px;
		display: block;
		font-size: 14px;
		color: #b1a0a3;
		margin-bottom: 5px;
	}

	.blog .blog-comments .comment p {
		margin-left: 65px;
	}

	.blog .blog-comments .comment.comment-reply {
		padding-left: 40px;
	}

	.blog .blog-comments .reply-form {
		margin-top: 30px;
		padding: 30px;
		box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
	}

	.blog .blog-comments .reply-form h4 {
		font-weight: bold;
		font-size: 22px;
	}

	.blog .blog-comments .reply-form p {
		font-size: 14px;
	}

	.blog .blog-comments .reply-form input {
		border-radius: 0;
		padding: 20px 10px;
		font-size: 14px;
	}

	.blog .blog-comments .reply-form input:focus {
		box-shadow: none;
		border-color: #f096a7;
	}

	.blog .blog-comments .reply-form textarea {
		border-radius: 0;
		padding: 10px 10px;
		font-size: 14px;
	}

	.blog .blog-comments .reply-form textarea:focus {
		box-shadow: none;
		border-color: #f096a7;
	}

	.blog .blog-comments .reply-form .form-group {
		margin-bottom: 25px;
	}

	.blog .blog-comments .reply-form .btn-primary {
		border-radius: 0;
		padding: 10px 20px;
		border: 0;
		border-radius: 50px;
		background-color: #263238;
	}

	.blog .blog-comments .reply-form .btn-primary:hover {
		background-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.blog .blog-pagination {
		color: #816a6e;
	}

	.blog .blog-pagination ul {
		display: flex;
		padding-left: 0;
		list-style: none;
	}

	.blog .blog-pagination li {
		border: 1px solid white;
		margin: 0 5px;
		transition: 0.3s;
	}

	.blog .blog-pagination li.active {
		background: white;
	}

	.blog .blog-pagination li a {
		color: #aaaaaa;
		padding: 7px 16px;
		display: inline-block;
	}

	.blog .blog-pagination li.active,
	.blog .blog-pagination li:hover {
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		border: 1px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.blog .blog-pagination li.active a,
	.blog .blog-pagination li:hover a {
		color: #fff;
	}

	.blog .blog-pagination li.disabled {
		background: #fff;
		border: 1px solid white;
	}

	.blog .blog-pagination li.disabled i {
		color: #f1f1f1;
		padding: 10px 16px;
		display: inline-block;
	}

	.blog .sidebar {
		padding: 30px;
		margin: 0 0 60px 20px;
		box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
	}

	.blog .sidebar .sidebar-title {
		font-size: 20px;
		font-weight: 700;
		padding: 0 0 0 0;
		margin: 0 0 15px 0;
		color: #263238;
		position: relative;
	}

	.blog .sidebar .sidebar-item {
		margin-bottom: 30px;
	}

	.blog .sidebar .search-form form {
		background: #fff;
		border: 1px solid #d3cacb;
		padding: 3px 10px;
		position: relative;
		border-radius: 50px;
	}

	.blog .sidebar .search-form form input[type="text"] {
		border: 0;
		padding: 4px;
		width: calc(100% - 42px);
	}

	.blog .sidebar .search-form form button {
		position: absolute;
		border-radius: 50px;
		top: 0;
		right: -2px;
		bottom: 0;
		border: 0;
		background: none;
		font-size: 16px;
		padding: 0 20px;
		margin: -1px;
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
		transition: 0.3s;
	}

	.blog .sidebar .search-form form button:hover {
		background: #d01d3f;
	}

	.blog .sidebar .categories ul {
		list-style: none;
		padding: 0;
	}

	.blog .sidebar .categories ul li+li {
		padding-top: 10px;
	}

	.blog .sidebar .categories ul a {
		color: #655356;
	}

	.blog .sidebar .categories ul a:hover {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.blog .sidebar .categories ul a span {
		padding-left: 5px;
		color: #b1a0a3;
		font-size: 14px;
	}

	.blog .sidebar .recent-posts .post-item+.post-item {
		margin-top: 15px;
	}

	.blog .sidebar .recent-posts img {
		width: 80px;
		float: left;
	}

	.blog .sidebar .recent-posts h4 {
		font-size: 15px;
		margin-left: 95px;
		font-weight: bold;
	}

	.blog .sidebar .recent-posts h4 a {
		color: #110e0e;
		transition: 0.3s;
	}

	.blog .sidebar .recent-posts h4 a:hover {
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.blog .sidebar .recent-posts time {
		display: block;
		margin-left: 95px;
		font-style: italic;
		font-size: 14px;
		color: #b1a0a3;
	}

	.blog .sidebar .tags {
		margin-bottom: -10px;
	}

	.blog .sidebar .tags ul {
		list-style: none;
		padding: 0;
	}

	.blog .sidebar .tags ul li {
		display: inline-block;
	}

	.blog .sidebar .tags ul a {
		color: #8e767a;
		font-size: 14px;
		padding: 6px 14px;
		margin: 0 6px 8px 0;
		border: 1px solid #ede9e9;
		display: inline-block;
		border-radius: 50px;
		transition: 0.3s;
	}

	.blog .sidebar .tags ul a:hover {
		color: #fff;
		border: 1px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	.blog .sidebar .tags ul a span {
		padding-left: 5px;
		color: #dfd8d9;
		font-size: 14px;
	}

	/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
	#footer {
		color: #444444;
		font-size: 14px;
		background: #f6f4f4;
		box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
	}

	#footer .footer-top {
		padding: 60px 0 30px 0;
		background: #fff;
	}

	#footer .footer-top .footer-contact {
		margin-bottom: 30px;
	}

	#footer .footer-top .footer-contact h4 {
		font-size: 22px;
		margin: 0 0 30px 0;
		padding: 2px 0 2px 0;
		line-height: 1;
		font-weight: 700;
	}

	#footer .footer-top .footer-contact p {
		font-size: 14px;
		line-height: 24px;
		margin-bottom: 0;
		font-family: "Nunito", sans-serif;
		color: #777777;
	}

	#footer .footer-top h4 {
		font-size: 16px;
		font-weight: bold;
		color: #444444;
		position: relative;
		padding-bottom: 12px;
	}

	#footer .footer-top .footer-links {
		margin-bottom: 30px;
	}

	#footer .footer-top .footer-links ul {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	#footer .footer-top .footer-links ul i {
		padding-right: 2px;
		color: #ea6981;
		font-size: 18px;
		line-height: 1;
	}

	#footer .footer-top .footer-links ul li {
		padding: 10px 0;
		display: flex;
		align-items: center;
	}

	#footer .footer-top .footer-links ul li:first-child {
		padding-top: 0;
	}

	#footer .footer-top .footer-links ul a {
		color: #777777;
		transition: 0.3s;
		display: inline-block;
		line-height: 1;
	}

	#footer .footer-top .footer-links ul a:hover {
		text-decoration: none;
		color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
	}

	#footer .footer-newsletter {
		font-size: 15px;
	}

	#footer .footer-newsletter h4 {
		font-size: 16px;
		font-weight: bold;
		color: #444444;
		position: relative;
		padding-bottom: 12px;
	}

	#footer .footer-newsletter form {
		margin-top: 30px;
		background: #fff;
		padding: 6px 10px;
		position: relative;
		border-radius: 50px;
		text-align: left;
		border: 1px solid #f7c2cc;
	}

	#footer .footer-newsletter form input[type="email"] {
		border: 0;
		padding: 4px 8px;
		width: calc(100% - 100px);
	}

	#footer .footer-newsletter form input[type="submit"] {
		position: absolute;
		top: 0;
		right: -2px;
		bottom: 0;
		border: 0;
		background: none;
		font-size: 15px;
		padding: 0 22px;
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
		transition: 0.3s;
		border-radius: 50px;
		box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
	}

	#footer .footer-newsletter form input[type="submit"]:hover {
		background: #d01d3f;
	}

	#footer .credits {
		padding-top: 5px;
		font-size: 13px;
		color: #F6F4F4;
	}

	#footer .credits a {
		color: #F6F4F4;
	}

	#footer .social-links a {
		font-size: 18px;
		display: inline-block;
		background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
		color: #fff;
		line-height: 1;
		padding: 8px 0;
		margin-right: 4px;
		border-radius: 50%;
		text-align: center;
		width: 36px;
		height: 36px;
		transition: 0.3s;
	}

	#footer .social-links a:hover {
		background: #d01d3f;
		color: #fff;
		text-decoration: none;
	}

	.logo_streaming {
		display: block;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 25px;
	}

	.ornamen {
		height: 50px;
		margin-top: 4px;
	}

	.colored {
		background-color: <?php echo $detail[0]->KONF_WEB_WARNA; ?>;
		/* defines the background color of the image */
		/* mask: url("https://get-married.site/uploads/ornamen/<?php echo $detail[0]->KONF_WEB_ORNAMEN; ?>.png") no-repeat center / contain; */
		-webkit-mask: url("./assets/ornamen/<?php echo $detail[0]->KONF_WEB_ORNAMEN; ?>.png") no-repeat center / contain;

	}
</style>

<body>

	<!-- ======= Header ======= -->
	<!-- <header id="header" class="fixed-top ">
		<div class="container d-flex align-items-center">

			<h1 class="logo mr-auto"><a href="index.html"><?php echo $detail[0]->KONF_WEB_JUDUL; ?></a></h1> -->
	<!-- Uncomment below if you prefer to use an image logo -->
	<!-- <a href="index.html" class="logo mr-auto"><img src="<?php echo base_url(); ?>assets/theme/assets/img/logo.png" alt="" class="img-fluid"></a>-->

	<!-- <nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="#about">Informasi</a></li>
					<li><a href="#team">Mempelai</a></li>
					<li><a href="#pricing">Jadwal</a></li>
					<li><a href="#portfolio">Galeri</a></li>
					<li><a href="#contact">Pesan</a></li>

				</ul>
			</nav> -->

	</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div class="hero-container">
			<?php if (empty($link)) {
				echo "";
			} else {
				echo "<h3>Kepada : <strong>" . $link[0]->UNDANGAN_KEPADA . "</strong></h3>";
			}

			?>
			<div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
				<h1><?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA; ?><br><small>&</small><br><?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA; ?></h1>
			</div>
			<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
				<h2>
					<?php
					if ($detail[0]->KONF_JADWAL_INTRO == "acara1") {
						$tanggal = tanggal($detail[0]->KONF_JADWAL_ACARA1_TANGGAL);
						$waktu = date('g:i A', strtotime($detail[0]->KONF_JADWAL_ACARA1_JAM));
						echo $detail[0]->KONF_JADWAL_ACARA1_ALAMAT;
					} else if ($detail[0]->KONF_JADWAL_INTRO == "acara2") {
						$tanggal = tanggal($detail[0]->KONF_JADWAL_ACARA2_TANGGAL);
						$waktu = date('g:i A', strtotime($detail[0]->KONF_JADWAL_ACARA2_JAM));
						echo $detail[0]->KONF_JADWAL_ACARA2_ALAMAT;
					}
					?>
				</h2>
			</div>
			<div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
				<a href="#pricing" class="btn-get-started scrollto"><?php echo $tanggal; ?>, <?php echo $waktu; ?></a>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<section id="about" class="about">
				<div class="container">
					<div class="section-title">
						<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
							<div class="ornamen colored"></div>
						</div>
						<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
							<h3><span><?php echo $detail[0]->KONF_PEMBUKAAN_JUDUL; ?></span></h3>
						</div>
					</div>
					<div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
						<div class="row content">
							<div class="col-lg-12">
								<p style="text-align:center"><?php echo $detail[0]->KONF_PEMBUKAAN_ISI; ?></p>
							</div>
						</div>
					</div>
				</div>
			</section><!-- End Cta Section -->
			<!-- ======= Team Section ======= -->
			<section id="team" class="team section-bg">
				<div class="container">

					<div class="section-title">
						<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
							<div class="ornamen colored"></div>
						</div>
						<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
							<h3><span>Memperkenalkan</span></h3>
							<p><?php echo $detail[0]->KONF_PENGANTIN_SUB_TITLE; ?></p>
						</div>
					</div>

					<div class="row">

						<div class="col-lg-6 col-md-6 d-flex align-items-stretch">
							<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
								<div class="member">
									<div class="member-img">
										<img src="https://get-married.site/uploads/cover/<?php echo $detail[0]->KONF_PENGANTIN_PRIA_FOTO ?>" class="img-fluid" alt="">

									</div>
									<div class="member-info">
										<h2><?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA_LENGKAP; ?></h2>
										<span><?php echo $detail[0]->KONF_PENGANTIN_PRIA_KETERANGAN; ?></span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 d-flex align-items-stretch">
							<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
								<div class="member">
									<div class="member-img">
										<img src="https://get-married.site/uploads/cover/<?php echo $detail[0]->KONF_PENGANTIN_WANITA_FOTO ?>" class="img-fluid" alt="">

									</div>
									<div class="member-info">
										<h2><?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA_LENGKAP; ?></h2>
										<span><?php echo $detail[0]->KONF_PENGANTIN_WANITA_KETERANGAN; ?></span>
									</div>
								</div>
							</div>
						</div>




					</div>

				</div>
			</section><!-- End Team Section -->
			<!-- ======= Pricing Section ======= -->
			<section id="pricing" class="pricing">
				<div class="container">

					<div class="section-title">
						<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
							<div class="ornamen colored"></div>
						</div>
						<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
							<h3><span>Jadwal</span></h3>
							<p>Kami mengharapkan kehadiran anda pada acara yang kami selenggarakan.</p>
						</div>
					</div>
					<div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
						<div class="row">
							<?php
							if ($detail[0]->KONF_JADWAL_ACARA1_STATUS == "on" && $detail[0]->KONF_JADWAL_ACARA2_STATUS == "on") {
								$col = "6";
							} else {
								$col = "12";
							}
							?>
							<?php
							if ($detail[0]->KONF_JADWAL_ACARA1_STATUS == "on") {
							?>
								<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?>">
									<div class="box">
										<h3><?php echo $detail[0]->KONF_JADWAL_ACARA1_JUDUL; ?></h3>
										<p><?php echo $detail[0]->KONF_JADWAL_ACARA1_ALAMAT; ?></p>
										<p class="text-muted"><?php echo tanggal($detail[0]->KONF_JADWAL_ACARA1_TANGGAL); ?>, <?php echo date('g:i A', strtotime($detail[0]->KONF_JADWAL_ACARA1_JAM)) ?></p>
										<div>
											<iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=<?php echo str_replace(" ", "", $detail[0]->KONF_JADWAL_ACARA1_MAP); ?>&hl=in&z=16&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
										<div class="btn-wrap">
											<a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo str_replace(" ", "", $detail[0]->KONF_JADWAL_ACARA1_MAP); ?>&dir_action=navigate" class="btn-buy" target="_blank">Buka Peta</a>
										</div>
									</div>
								</div>
							<?php
							}
							?>
							<?php
							if ($detail[0]->KONF_JADWAL_ACARA2_STATUS == "on") {
							?>
								<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?>">
									<div class="box">
										<h3><?php echo $detail[0]->KONF_JADWAL_ACARA2_JUDUL; ?></h3>
										<p><?php echo $detail[0]->KONF_JADWAL_ACARA2_ALAMAT; ?></p>
										<p class="text-muted"><?php echo tanggal($detail[0]->KONF_JADWAL_ACARA2_TANGGAL); ?>, <?php echo date('g:i A', strtotime($detail[0]->KONF_JADWAL_ACARA2_JAM)) ?></p>
										<div>
											<iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=<?php echo str_replace(" ", "", $detail[0]->KONF_JADWAL_ACARA2_MAP); ?>&hl=in&z=16&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
										<div class="btn-wrap">
											<a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo str_replace(" ", "", $detail[0]->KONF_JADWAL_ACARA2_MAP); ?>&dir_action=navigate" class="btn-buy" target="_blank">Buka Peta</a>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>

				</div>
			</section><!-- End Pricing Section -->
			<?php
			if ($detail[0]->KONF_JADWAL_COVID19 == "on") {
			?>
				<!-- ======= Features Section ======= -->
				<section id="pricing" class="features">
					<div class="container">
						<div class="section-title">
							<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
								<h2>Covid-19</h2>
							</div>
							<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
								<h3>Protokol <span>Kesehatan</span></h3>
								<p>Stop Penyebaran Covid-19 Dengan Menerapkan Protokol Kesehatan.</p>
							</div>
						</div>
						<div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
							<div class="row">
								<div class="col-lg-3 col-md-4 col-6 col-6">
									<div class="icon-box">
										<i class="fas fa-head-side-mask" style="color: #ffbb2c;"></i>
										<h3><a href="">Memakai Masker</a></h3>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-6">
									<div class="icon-box">
										<i class="fas fa-handshake-slash" style="color: #5578ff;"></i>
										<h3><a href="">Hindari Berjabat Tangan</a></h3>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
									<div class="icon-box">
										<i class="fas fa-people-arrows" style="color: #e80368;"></i>
										<h3><a href="">Mejaga Jarak</a></h3>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
									<div class="icon-box">
										<i class="fas fa-hands-wash" style="color: #e361ff;"></i>
										<h3><a href="">Mencuci Tangan</a></h3>
									</div>
								</div>
							</div>
							<div class="row">
								<img class="logo_streaming" style="margin-top:20px" height="50" src="<?php echo base_url(); ?>/assets/kemenkes.png">
							</div>
						</div>
					</div>
				</section><!-- End Features Section -->
			<?php } ?>

			<?php
			if ($detail[0]->KONF_LIVE_STATUS == "on") {
			?>
				<!-- ======= Cta Section ======= -->
				<section id="pricing" class="about section-bg">
					<div class="container">
						<div class="section-title">
							<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
								<div class="ornamen colored"></div>
							</div>
							<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
								<h3><span>Live Streaming</span></h3>
							</div>
						</div>
						<div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
							<img class="logo_streaming" height="70" src="https://get-married.site/uploads/live/<?php echo $detail[0]->KONF_LIVE_PLATFORM; ?>.png">
							<div class="row content">
								<div class="col-lg-12">
									<p style="text-align:center;padding-bottom:20px; font-size:18px;"><?php echo $detail[0]->KONF_LIVE_KETERANGAN; ?></p>
								</div>
								<a href="<?php echo $detail[0]->KONF_LIVE_LINK; ?>" target="_blank" class="btn-learn-more">Buka Live Streaming</a>
							</div>
						</div>
					</div>
				</section><!-- End Cta Section -->
			<?php } ?>

			<?php
			if ($detail[0]->KONF_INFORMASI_STATUS == "on") {
			?>
				<!-- ======= Cta Section ======= -->
				<section id="about" class="about section-bg">
					<div class="container">
						<div class="section-title">
							<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
								<div class="ornamen colored"></div>
							</div>
							<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
								<h2><span>Informasi</span></h2>
								<h3><span><?php echo $detail[0]->KONF_INFORMASI_JUDUL; ?></span></h3>
							</div>
						</div>
						<div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
							<div class="row content">
								<div class="col-lg-12">
									<p style="text-align:center"><?php echo $detail[0]->KONF_INFORMASI_ISI; ?></p>
								</div>
							</div>
						</div>

					</div>
				</section><!-- End Cta Section -->
			<?php } ?>

			<!-- ======= Portfolio Section ======= -->
			<section id="portfolio" class="portfolio">
				<div class="container">
					<div class="section-title">
						<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
							<div class="ornamen colored"></div>
						</div>
						<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
							<h3><span>Galeri Prewedding</span></h3>
						</div>
					</div>
					<style media="screen">
						.masonry-container {
							-webkit-column-count: 3;
							-moz-column-count: 3;
							column-count: 3;

							-webkit-column-gap: 15px;
							-moz-column-gap: 15px;
							column-gap: 15px;
						}

						.masonry-item {
							display: inline-block;
							width: 100%;
						}

						.masonry-item img {
							display: block;
							width: 100%;
						}

						/* Just for decoration: */
						.masonry-item span {
							font-family: sans-serif;
							display: block;
							padding: 10px;
						}

						.masonry-item {
							margin-bottom: 15px;
							border: 1px solid #ccc;
							border-radius: 5px;
						}

						@media (max-width: 768px) {
							.masonry-container {
								-webkit-column-count: 2;
								-moz-column-count: 2;
								column-count: 2;

								-webkit-column-gap: 15px;
								-moz-column-gap: 15px;
								column-gap: 15px;
							}
						}
					</style>
					<div class="row content">
						<div class="masonry-container">
							<?php
							foreach ($galeri as $row) {
							?>
								<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
									<div class="masonry-item">
										<a href=""><img src="https://get-married.site/uploads/cover/<?php echo $row->ALBUM_USER_FOTO; ?>" /></a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>

					<?php if ($detail[0]->KONF_VIDEO_STATUS == "on") {
					?>
						<div class="section-title">
							<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
								<div class="ornamen colored"></div>
							</div>
							<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
								<h3><span>Video</span></h3>
								<p></p>
							</div>
						</div>
						<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
							<div class="row content">
								<style>
									iframe {
										margin: 0 auto;
										background-color: #777;
									}

									iframe {
										display: block;
										border-style: none;
									}
								</style>
								<iframe width="560" height="315" src="<?php
																		parse_str(parse_url($detail[0]->KONF_VIDEO_LINK, PHP_URL_QUERY), $my_array_of_vars);
																		echo "https://www.youtube.com/embed/" . $my_array_of_vars['v'] . "";
																		?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					<?php
					} else {
					}
					?>
				</div>
			</section><!-- End Portfolio Section -->



			<!-- ======= Contact Section ======= -->
			<section id="contact" class="contact">
				<div class="container">

					<div class="section-title">
						<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
							<div class="ornamen colored"></div>
						</div>
						<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
							<h3><span>Pesan Anda</span></h3>
						</div>
					</div>
					<div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
						<div class="col-lg-12 mt-5 mt-lg-0">

							<form action="index.php/web/kirim" method="post" role="form" class="php-email-form">
								<div class="form-group">
									<input type="text" name="nama" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
									<div class="validate"></div>
								</div>
								<div class="form-group">
									<select class="form-control" name="kehadiran">
										<option value="hadir">Hadir</option>
										<option value="tidak">Tidak Hadir</option>
									</select>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Ucapan dan Doa"></textarea>
									<div class="validate"></div>
								</div>
								<div class="mb-3">
									<div class="loading">Loading</div>
									<div class="error-message"></div>
									<div class="sent-message">Your message has been sent. Thank you!</div>
								</div>
								<div class="text-center"><button type="submit">Kirim</button></div>
							</form>
						</div>
					</div>

				</div>

				</div>
			</section><!-- End Contact Section -->

			<!-- ======= F.A.Q Section ======= -->
			<section id="contact" class="faq section-bg">
				<div class="container">

					<div class="section-title">
						<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
							<div class="ornamen colored"></div>
						</div>
						<div class="aos-item" data-aos="zoom-in" data-aos-duration="1000">
							<h3><span>Pesan Masuk</span></h3>
						</div>
					</div>

					<ul class="faq-list">
						<?php
						foreach ($pesan as $row) {
						?>
							<li>
								<div class="aos-item" data-aos="fade-down" data-aos-duration="1000">
									<a data-toggle="collapse" class="" href="#faq<?php echo $row->RSVP_INDEX; ?>"><?php echo $row->RSVP_NAMA; ?>
									</a>
									<div id="faq<?php echo $row->RSVP_INDEX; ?>" class="collapse show" data-parent=".faq-list">
										<p>"<?php echo $row->RSVP_PESAN; ?>"</p>
									</div>
								</div>
							</li>
						<?php } ?>

					</ul>


				</div>
			</section><!-- End F.A.Q Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<!-- <audio autoplay loop id="my_audio">
	<source src="https://get-married.site/uploads/mp3/playdate.ogg" type="audio/ogg">
	<source src="https://get-married.site/uploads/mp3/playdate.mp3" type="audio/mpeg">
	</audio> -->
		<div class="container d-md-flex py-4">

			<div class="mr-md-auto text-center text-md-left">
				<div class="copyright">
					&copy; Copyright <strong><span>segeranikah.id</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
			<div class="social-links text-center text-md-right pt-3 pt-md-0">
				<a href="#" class="twitter"><i class="bx bx-globe"></i></a>
				<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
				<!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
				<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
			</div>
		</div>
	</footer><!-- End Footer -->
	<?php if ($detail[0]->KONF_MUSIK_STATUS == "on") {
		$nama_musik = $detail[0]->KONF_MUSIK;
		echo '<a class="musik"><i id="musik" class="ri-music-2-line "></i></a>';
	} else {
		$nama_musik = "silent.mp3";
	}
	?>

	<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?php echo base_url(); ?>assets/theme/assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/theme/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/theme/assets/vendor/php-email-form/validate.js"></script>
	<script src="<?php echo base_url(); ?>assets/theme/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/theme/assets/vendor/venobox/venobox.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/theme/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/mosaicflow/jquery.mosaicflow.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="<?php echo base_url(); ?>assets/theme/assets/js/main.js"></script>
	<iframe src="https://get-married.site/uploads/mp3/silence.mp3" allow="autoplay" id="audio" style="display: none"></iframe>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.1/howler.min.js" integrity="sha512-L6Z/YtIPQ7eU3BProP34WGU5yIRk7tNHk7vaC2dB1Vy1atz6wl9mCkTPPZ2Rn1qPr+vY2mZ9odZLdGYuaBk7dQ==" crossorigin="anonymous"></script>
	<script>
		let autoplay = true;
		let soundID;
		var sound = new Howl({
			src: ['https://get-married.site/uploads/mp3/<?php echo $nama_musik; ?>'],
			autoplay: autoplay,
			loop: true,
		});

		soundID = sound.play();

		$(".musik").on("click", function() {
			if (!sound.playing()) {
				sound.play();
				$("i#musik").attr("class", "ri-music-2-line ")
			} else {
				sound.pause();
				$("i#musik").attr("class", "ri-play-fill ")
			}
		})

		AOS.init({
			easing: 'ease-in-out-sine'
		});
	</script>

</body>

</html>