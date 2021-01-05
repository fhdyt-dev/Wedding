<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $detail[0]->KONF_WEB_JUDUL; ?>, <?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA; ?> & <?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <meta property="og:title" content="?php echo $detail[0]->KONF_WEB_JUDUL; ?>, <?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA; ?> & <?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA; ?>">
  <meta property="og:description" content="Turut mengundang teman-teman, sahabat dan keluarga menyaksikan pengesahan kisah cinta Kami yang begitu indah dalam resepsi pernikahan Kami">
  <meta property="og:image" content="http://localhost/Wedding/Wedding-CP/uploads/cover/<?php echo $detail[0]->KONF_WEB_SAMPUL ?>">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/theme/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/theme/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
	<?php
		foreach($font as $row)
		{
			?>
			<link href="https://fonts.googleapis.com/css?family=<?php echo $row->FONT_KODE; ?>:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
	<?php
		}
	 ?>

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/theme/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/theme/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/theme/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/theme/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/theme/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/theme/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TheEvent - v2.2.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style media="screen">
/**
* Template Name: TheEvent - v2.2.0
* Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  background: #fff;
  color: #2f3138;
  font-family: "<?php echo $detail[0]->KONF_WEB_FONT ?>", sans-serif;
}

a {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  transition: 0.5s;
}

a:hover, a:active, a:focus {
  color: #f8234a;
  outline: none;
  text-decoration: none;
}

p {
  padding: 0;
  margin: 0 0 30px 0;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
  padding: 0;
  color: #0e1b4d;
}


.main-page {
  margin-top: 70px;
}

/* Prelaoder */
#preloader {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 999;
  width: 100%;
  height: 100%;
  overflow: visible;
  background: #fff url("<?php echo base_url(); ?>assets/theme/assets/img/preloader.svg") no-repeat center center;
}

/* Back to top button */
.back-to-top {
  position: fixed;
  display: none;
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  color: #fff;
  width: 40px;
  height: 40px;
  text-align: center;
  border-radius: 50px;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s ease-in-out;
}

.back-to-top i {
  font-size: 24px;
  padding-top: 6px;
}

@media (max-width: 768px) {
  .back-to-top {
    bottom: 15px;
  }
}

.back-to-top:focus {
  background: #e0072f;
  color: #fff;
  outline: none;
}

.back-to-top:hover {
  background: #e0072f;
  color: #fff;
}

/* Sections Header
--------------------------------*/
.section-header {
  margin-bottom: 60px;
  position: relative;
  padding-bottom: 20px;
}

.section-header::before {
  content: '';
  position: absolute;
  display: block;
  width: 60px;
  height: 5px;
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  bottom: 0;
  left: calc(50% - 25px);
}

.section-header h2 {
  font-size: 36px;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
  margin-bottom: 10px;
}

.section-header p {
  text-align: center;
  padding: 0;
  margin: 0;
  font-size: 14px;
  font-weight: 500;
  color: #9195a2;
}

.section-with-bg {
  background-color: #f6f7fd;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 90px;
  padding: 25px 0;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  transition: all 0.5s;
  z-index: 997;
}

@media (max-width: 991px) {
  #header {
    background: rgba(6, 12, 34, 0.98);
    height: 70px;
    padding: 15px 0;
    transition: all 0.5s;
  }
}

@media (max-width: 1199px) {
  #header .container {
    max-width: 100%;
  }
}

#header.header-scrolled, #header.header-fixed {
  background: rgba(6, 12, 34, 0.98);
  height: 70px;
  padding: 15px 0;
  transition: all 0.5s;
}

#header #logo h1 {
  font-size: 35px;
  margin: 0;
  padding: 6px 0;
  line-height: 1;
  font-family: "Great Vibes", sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
  color: #fff;
}

#header #logo h1 span {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#header #logo h1 a, #header #logo h1 a:hover {
  color: #fff;
}

#header #logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Nav Menu Essentials */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu ul {
  position: absolute;
  display: none;
  top: 100%;
  left: 0;
  z-index: 99;
}

.nav-menu li {
  position: relative;
  white-space: nowrap;
}

.nav-menu > li {
  float: left;
}

.nav-menu li:hover > ul,
.nav-menu li.sfHover > ul {
  display: block;
}

.nav-menu ul ul {
  top: 0;
  left: 100%;
}

.nav-menu ul li {
  min-width: 180px;
}

/* Nav Menu Arrows */
.sf-arrows .sf-with-ul {
  padding-right: 30px;
}

.sf-arrows .sf-with-ul:after {
  content: "\f107";
  position: absolute;
  right: 15px;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
}

.sf-arrows ul .sf-with-ul:after {
  content: "\f105";
}

/* Nav Meu Container */
#nav-menu-container {
  float: right;
  margin: 0;
}

@media (max-width: 991px) {
  #nav-menu-container {
    display: none;
  }
}

/* Nav Meu Styling */
.nav-menu a {
  padding: 8px;
  text-decoration: none;
  display: inline-block;
  color: rgba(202, 206, 221, 0.8);
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  font-size: 14px;
  outline: none;
}

@media (max-width: 1199px) {
  .nav-menu a {
    padding: 8px 4px;
  }
}

.nav-menu .menu-active a, .nav-menu a:hover {
  color: #fff;
}

.nav-menu > li {
  margin-left: 8px;
}

.nav-menu > li > a:before {
  content: "";
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  visibility: hidden;
  transition: all 0.3s ease-in-out 0s;
}

.nav-menu a:hover:before, .nav-menu li:hover > a:before, .nav-menu .menu-active > a:before {
  visibility: visible;
  width: 100%;
}

.nav-menu li.buy-tickets a {
  color: #fff;
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  padding: 7px 22px;
  border-radius: 50px;
  border: 2px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  transition: all ease-in-out 0.3s;
  font-weight: 500;
  margin-left: 8px;
  margin-top: 2px;
  line-height: 1;
  font-size: 13px;
}

.nav-menu li.buy-tickets a:hover {
  background: none;
}

.nav-menu li.buy-tickets:hover a:before, .nav-menu li.buy-tickets.menu-active a:before {
  visibility: hidden;
}

.nav-menu ul {
  margin: 4px 0 0 0;
  padding: 10px;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  background: #fff;
  border-radius: 3px;
}

.nav-menu ul li {
  transition: 0.3s;
}

.nav-menu ul li a {
  padding: 10px;
  color: #060c22;
  transition: 0.3s;
  display: block;
  font-size: 13px;
  text-transform: none;
  border-radius: 3px;
}

.nav-menu ul li:hover > a {
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  color: #fff;
}

.nav-menu ul ul {
  margin: 0;
}

/* Mobile Nav Toggle */
#mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 999;
  margin: 15px 15px 0 0;
  border: 0;
  background: none;
  font-size: 24px;
  display: none;
  transition: all 0.4s;
  outline: none;
  cursor: pointer;
}

#mobile-nav-toggle i {
  color: #fff;
}

@media (max-width: 991px) {
  #mobile-nav-toggle {
    display: inline;
  }
}

/* Mobile Nav Styling */
#mobile-nav {
  position: fixed;
  top: 0;
  padding-top: 18px;
  bottom: 0;
  z-index: 998;
  background: rgba(6, 12, 34, 0.9);
  left: -260px;
  width: 260px;
  overflow-y: auto;
  transition: 0.4s;
}

#mobile-nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

#mobile-nav ul li {
  position: relative;
}

#mobile-nav ul li a {
  color: #fff;
  font-size: 17px;
  overflow: hidden;
  padding: 10px 22px 10px 15px;
  position: relative;
  text-decoration: none;
  width: 100%;
  display: block;
  outline: none;
}

#mobile-nav ul li a:hover {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#mobile-nav ul li li {
  padding-left: 30px;
}

#mobile-nav ul .menu-has-children i {
  position: absolute;
  right: 0;
  z-index: 99;
  padding: 15px;
  cursor: pointer;
  color: #fff;
}

#mobile-nav ul .menu-has-children i.fa-chevron-up {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#mobile-nav ul .menu-item-active {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#mobile-body-overly {
  width: 100%;
  height: 100%;
  z-index: 997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(6, 12, 34, 0.8);
  display: none;
}

/* Mobile Nav body classes */
body.mobile-nav-active {
  overflow: hidden;
}

body.mobile-nav-active #mobile-nav {
  left: 0;
}

body.mobile-nav-active #mobile-nav-toggle {
  color: #fff;
}

/*--------------------------------------------------------------
# Intro Section
--------------------------------------------------------------*/
#intro {
  width: 100%;
  height: 100vh;
  background: url(http://localhost/Wedding/Wedding-CP/uploads/cover/<?php echo $detail[0]->KONF_WEB_SAMPUL ?>) top center;
  background-size: cover;
  overflow: hidden;
  position: relative;
}

@media (min-width: 1024px) {
  #intro {
    background-attachment: fixed;
  }
}

#intro:before {
  content: "";
  background: rgb(0,0,0, 0.7);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#intro .intro-container {
  position: absolute;
  bottom: 0;
  left: 0;
  top: 90px;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  padding: 0 15px;
}

@media (max-width: 991px) {
  #intro .intro-container {
    top: 70px;
  }
}

#intro h1 {
  color: #fff;
  font-family: "<?php echo $detail[0]->KONF_WEB_FONT_INTRO ?>", sans-serif;
  font-size: 85px;
  font-weight: 600;
}

#intro h1 span {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

@media (max-width: 991px) {
  #intro h1 {
    font-size: 50px;
  }
}

#intro p {
  color: #ebebeb;
  font-weight: 700;
  font-size: 20px;
}

@media (max-width: 991px) {
  #intro p {
    font-size: 16px;
  }
}

#intro .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(<?php echo $detail[0]->KONF_WEB_WARNA ?> 50%, rgba(101, 111, 150, 0.15) 52%);
  border-radius: 50%;
  display: block;
  position: relative;
  overflow: hidden;
}

#intro .play-btn::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

#intro .play-btn:before {
  content: '';
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 2px solid rgba(163, 163, 163, 0.4);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

#intro .play-btn:hover::after {
  border-left: 15px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  transform: scale(20);
}

#intro .play-btn:hover::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

#intro .pembukaan-btn {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#intro .pembukaan-btn:hover {
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  color: #fff;
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# pembukaan Section
--------------------------------------------------------------*/
#pembukaan {
  <?php if($detail[0]->KONF_PEMBUKAAN_SAMPUL == "tema"){
  ?>

  <?php
  }
  else{
  ?>
  background: url(http://localhost/Wedding/Wedding-CP/uploads/cover/<?php echo $detail[0]->KONF_PEMBUKAAN_GAMBAR ?>);
  <?php
  }
  ?>

  background-size: cover;
  overflow: hidden;
  position: relative;
  color: #fff;
  padding: 60px 0 40px 0;
}

@media (min-width: 1024px) {
  #pembukaan {
    background-attachment: fixed;
  }
}

#pembukaan:before {
  content: "";
  <?php if($detail[0]->KONF_PEMBUKAAN_SAMPUL == "tema"){
  ?>
    background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  <?php
  }
  else{
  ?>
  background: rgba(13, 20, 41, 0.7);
  <?php
  }
  ?>

  /*  */
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#pembukaan h2 {
  font-size: 36px;
  text-align: center;
  font-weight: bold;
  margin-bottom: 10px;
  color: #fff;
}

#pembukaan h3 {
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 10px;
  color: #fff;
}

#pembukaan p {
  font-size: 14px;
  text-align: center;
  margin-bottom: 20px;
  color: #fff;
}

/*--------------------------------------------------------------
# pengantin Section
--------------------------------------------------------------*/
#pengantin {
  padding: 60px 0 30px 0;
}

#pengantin .detail_pengantin {
  color: #0e1b4d;
  font-weight: 700;
  font-size: 15px;
}

#pengantin .speaker {
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}

#pengantin .speaker .details {
  background: rgba(6, 12, 34, 0.76);
  position: absolute;
  left: 0;
  bottom: -30px;
  right: 0;
  text-align: center;
  padding-top: 10px;
  transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
}

#pengantin .speaker .details h3 {
  color: #fff;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
}

#pengantin .speaker .details p {
  color: #fff;
  font-size: 15px;
  margin-bottom: 10px;
  font-style: italic;
}

#pengantin .speaker .details .social {
  height: 30px;
}

#pengantin .speaker .details a {
  color: #fff;
}

#pengantin .speaker .details a:hover {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#pengantin .speaker:hover .details {
  bottom: 0;
}

#pengantin-details {
  padding: 60px 0;
}

#pengantin-details .details h2 {
  color: #112363;
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 10px;
}

#pengantin-details .details .social {
  margin-bottom: 15px;
}

#pengantin-details .details .social a {
  background: #e9edfb;
  color: #112363;
  line-height: 1;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 36px;
  height: 36px;
  padding-top: 9px;
}

#pengantin-details .details .social a:hover {
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  color: #fff;
}

#pengantin-details .details .social a i {
  font-size: 18px;
}

#pengantin-details .details p {
  color: #112363;
  font-size: 15px;
  margin-bottom: 10px;
}



/*--------------------------------------------------------------
# Schedule Section
--------------------------------------------------------------*/
#schedule {
  padding: 60px 0 60px 0;
}

#schedule .nav-tabs {
  text-align: center;
  margin: auto;
  display: block;
  border-bottom: 0;
  margin-bottom: 30px;
}

#schedule .nav-tabs li {
  display: inline-block;
  margin-bottom: 0;
}

#schedule .nav-tabs a {
  border: none;
  border-radius: 50px;
  font-weight: 600;
  background-color: #0e1b4d;
  color: #fff;
  padding: 10px 100px;
}

@media (max-width: 991px) {
  #schedule .nav-tabs a {
    padding: 8px 60px;
  }
}

@media (max-width: 767px) {
  #schedule .nav-tabs a {
    padding: 8px 50px;
  }
}

@media (max-width: 480px) {
  #schedule .nav-tabs a {
    padding: 8px 30px;
  }
}

#schedule .nav-tabs a.active {
  background-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  color: #fff;
}

#schedule .sub-heading {
  text-align: center;
  font-size: 18px;
  font-style: italic;
  margin: 0 auto 30px auto;
}

@media (min-width: 991px) {
  #schedule .sub-heading {
    width: 75%;
  }
}

#schedule .tab-pane {
  transition: ease-in-out .2s;
}

#schedule .schedule-item {
  border-bottom: 1px solid #fff;
  padding-top: 15px;
  padding-bottom: 15px;
  transition: background-color ease-in-out 0.3s;
}

#schedule .schedule-item:hover {
  background-color: #fff;
}

#schedule .schedule-item time {
  padding-bottom: 5px;
  display: inline-block;
}

#schedule .schedule-item .speaker {
  width: 60px;
  height: 60px;
  overflow: hidden;
  border-radius: 50%;
  float: left;
  margin: 0 10px 10px 0;
}

#schedule .schedule-item .speaker img {
  height: 100%;
  transform: translateX(-50%);
  margin-left: 50%;
  transition: all ease-in-out 0.3s;
}

#schedule .schedule-item h4 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 5px;
}

#schedule .schedule-item h4 span {
  font-style: italic;
  color: #19328e;
  font-weight: normal;
  font-size: 16px;
}

#schedule .schedule-item p {
  font-style: italic;
  color: #152b79;
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# jadwal Section
--------------------------------------------------------------*/
#jadwal {
  padding: 60px 0;
}

#jadwal .container-fluid {
  margin-bottom: 3px;
}

#jadwal .jadwal-map iframe {
  width: 100%;
  height: 100%;
  min-height: 300px;
}

#jadwal .jadwal-info {
  background: url("<?php echo base_url(); ?>assets/theme/assets/img/venue-info-bg.jpg") top center no-repeat;
  background-size: cover;
  position: relative;
  padding-top: 60px;
  padding-bottom: 60px;
}

#jadwal .jadwal-info:before {
  content: "";
  background: rgba(13, 20, 41, 0.8);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#jadwal .jadwal-info h3 {
  font-size: 36px;
  font-weight: 700;
  color: #fff;
}

@media (max-width: 574px) {
  #jadwal .jadwal-info h3 {
    font-size: 24px;
  }
}

#jadwal .jadwal-info p {
  color: #fff;
  margin-bottom: 0;
}

#jadwal .jadwal-gallery-container {
  padding-right: 12px;
}

#jadwal .jadwal-gallery {
  overflow: hidden;
  border-right: 3px solid #fff;
  border-bottom: 3px solid #fff;
}

#jadwal .jadwal-gallery img {
  transition: all ease-in-out 0.4s;
}

#jadwal .jadwal-gallery:hover img {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# Hotels Section
--------------------------------------------------------------*/
#hotels {
  padding: 60px 0;
}

#hotels .hotel {
  border: 1px solid #e0e5fa;
  background: #fff;
  margin-bottom: 30px;
}

#hotels .hotel:hover .hotel-img img {
  transform: scale(1.1);
}

#hotels .hotel-img {
  overflow: hidden;
  margin-bottom: 15px;
}

#hotels .hotel-img img {
  transition: 0.3s ease-in-out;
}

#hotels h3 {
  font-weight: 600;
  font-size: 20px;
  margin-bottom: 5px;
  padding: 0 20px;
}

#hotels a {
  color: #152b79;
}

#hotels a:hover {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#hotels .stars {
  padding: 0 20px;
  margin-bottom: 5px;
}

#hotels .stars i {
  color: #ffc31d;
}

#hotels p {
  padding: 0 20px;
  margin-bottom: 20px;
  color: #060c22;
  font-style: italic;
  font-size: 15px;
}

/*--------------------------------------------------------------
# Gallery Section
--------------------------------------------------------------*/
#gallery {
  padding: 60px;
  overflow: hidden;
}

#gallery .owl-nav, #gallery .owl-dots {
  margin-top: 25px;
  text-align: center;
}

#gallery .owl-item {
  border-left: 2px solid #fff;
  border-right: 2px solid #fff;
}

#gallery .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd;
}

#gallery .owl-dot.active {
  background-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#gallery .gallery-carousel .owl-stage-outer {
  overflow: visible;
}

#gallery .gallery-carousel .center {
  border: 6px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  margin: -10px;
  box-sizing: content-box;
  padding: 4px;
  background: #fff;
  z-index: 1;
}

/*--------------------------------------------------------------
# Sponsors Section
--------------------------------------------------------------*/
#supporters {
  padding: 60px 0;
}

#supporters .supporters-wrap {
  border-top: 1px solid #e0e5fa;
  border-left: 1px solid #e0e5fa;
  margin-bottom: 30px;
}

#supporters .supporter-logo {
  padding: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-right: 1px solid #e0e5fa;
  border-bottom: 1px solid #e0e5fa;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.5);
  height: 160px;
}

#supporters .supporter-logo:hover img {
  transform: scale(1.2);
}

#supporters img {
  transition: all 0.4s ease-in-out;
}

/*--------------------------------------------------------------
# F.A.Q Section
--------------------------------------------------------------*/
#faq {
  padding: 60px 0;
}

#faq #faq-list {
  padding: 0;
  list-style: none;
}

#faq #faq-list li {
  border-bottom: 1px solid #ddd;
}

#faq #faq-list a {
  padding: 18px 0;
  display: block;
  position: relative;
  font-family: "Raleway", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
  padding-right: 20px;
}

#faq #faq-list i {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 16px;
}

#faq #faq-list p {
  margin-bottom: 20px;
}

@media (max-width: 768px) {
  #faq #faq-list a {
    font-size: 18px;
  }
  #faq #faq-list i {
    top: 13px;
  }
}

#faq #faq-list a.collapse {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#faq #faq-list a.collapsed {
  color: #000;
}

#faq #faq-list a.collapsed i::before {
  content: "\f055" !important;
}

/*--------------------------------------------------------------
# Subscribe Section
--------------------------------------------------------------*/
#subscribe {
  padding: 60px;
  background: url(http://localhost/Wedding/Wedding-CP/uploads/cover/<?php echo $detail[0]->KONF_WEB_SAMPUL ?>) center center no-repeat;
  background-size: cover;
  overflow: hidden;
  position: relative;
}

#subscribe:before {
  content: "";
  background: rgba(6, 12, 34, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

@media (min-width: 1024px) {
  #subscribe {
    background-attachment: fixed;
  }
}

#subscribe .section-header h2, #subscribe p {
  color: #fff;
}

#subscribe input {
  background: #fff;
  color: #060c22;
  border: 0;
  outline: none;
  margin: 0;
  padding: 9px 20px;
  border-radius: 50px;
  font-size: 14px;
}

@media (min-width: 767px) {
  #subscribe input {
    min-width: 400px;
  }
}

#subscribe button {
  border: 0;
  padding: 9px 25px;
  cursor: pointer;
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  color: #fff;
  transition: all 0.3s ease;
  outline: none;
  font-size: 14px;
  border-radius: 50px;
}

#subscribe button:hover {
  background: #e0072f;
}

@media (max-width: 460px) {
  #subscribe button {
    margin-top: 10px;
  }
}

/*--------------------------------------------------------------
# Buy Tickets Section
--------------------------------------------------------------*/
#buy-tickets {
  padding: 60px 0;
}

#buy-tickets .card {
  border: none;
  border-radius: 5px;
  transition: all  0.3s ease-in-out;
  box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1);
}

#buy-tickets .card:hover {
  box-shadow: 0 10px 35px 0 rgba(6, 12, 34, 0.2);
}

#buy-tickets .card hr {
  margin: 25px 0;
}

#buy-tickets .card .card-title {
  margin: 10px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: bold;
}

#buy-tickets .card .card-price {
  font-size: 48px;
  margin: 0;
}

#buy-tickets .card ul li {
  margin-bottom: 20px;
}

#buy-tickets .card .text-muted {
  opacity: 0.7;
}

#buy-tickets .card .btn {
  font-size: 15px;
  border-radius: 50px;
  padding: 10px 40px;
  transition: all 0.2s;
  background-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  border: 0;
  color: #fff;
}

#buy-tickets .card .btn:hover {
  background-color: #e0072f;
}

#buy-tickets #buy-ticket-modal input, #buy-tickets #buy-ticket-modal select {
  border-radius: 0;
}

#buy-tickets #buy-ticket-modal .btn {
  font-size: 15px;
  border-radius: 50px;
  padding: 10px 40px;
  transition: all 0.2s;
  background-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  border: 0;
  color: #fff;
}

#buy-tickets #buy-ticket-modal .btn:hover {
  background-color: #e0072f;
}

/*--------------------------------------------------------------
# rsvp Section
--------------------------------------------------------------*/
#rsvp {
  padding: 60px 0;
}

#rsvp .rsvp-info {
  margin-bottom: 20px;
  text-align: center;
}

#rsvp .rsvp-info i {
  font-size: 48px;
  display: inline-block;
  margin-bottom: 10px;
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#rsvp .rsvp-info address, #rsvp .rsvp-info p {
  margin-bottom: 0;
  color: #112363;
}

#rsvp .rsvp-info h3 {
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: bold;
  text-transform: uppercase;
  color: #112363;
}

#rsvp .rsvp-info a {
  color: #4869df;
}

#rsvp .rsvp-info a:hover {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#rsvp .rsvp-address, #rsvp .rsvp-phone, #rsvp .rsvp-email {
  margin-bottom: 20px;
}

@media (min-width: 768px) {
  #rsvp .rsvp-address, #rsvp .rsvp-phone, #rsvp .rsvp-email {
    padding: 20px 0;
  }
}

@media (min-width: 768px) {
  #rsvp .rsvp-phone {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
  }
}

#rsvp .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

#rsvp .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

#rsvp .php-email-form .error-message br + br {
  margin-top: 25px;
}

#rsvp .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#rsvp .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

#rsvp .php-email-form .loading:before {
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

#rsvp .php-email-form input, #rsvp .php-email-form textarea, #rsvp .php-email-form select {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

#rsvp .php-email-form input::focus, #rsvp .php-email-form textarea::focus, #rsvp .php-email-form select::focus {
  background-color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#rsvp .php-email-form input {
  padding: 20px 15px;
}
#rsvp .php-email-form select-selected {
  padding: 20px 15px;
}

#rsvp .php-email-form textarea {
  padding: 12px 15px;
}

#rsvp .php-email-form button[type="submit"] {
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  border: 0;
  padding: 10px 40px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
  cursor: pointer;
}

#rsvp .php-email-form button[type="submit"]:hover {
  background: #e0072f;
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
# Footer
--------------------------------------------------------------*/
#footer {
  background: #101522;
  padding: 0 0 25px 0;
  color: #eee;
  font-size: 14px;
}

#footer .footer-top {
  background: #040919;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 26px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-family: "Raleway", sans-serif;
  font-weight: 700;
  color: #fff;
}

#footer .footer-top .footer-info img {
  height: 40px;
  margin-bottom: 10px;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #222636;
  color: #eee;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  color: #fff;
}

#footer .footer-top h4 {
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 12px;
  border-bottom: 2px solid <?php echo $detail[0]->KONF_WEB_WARNA ?>;
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
  padding-right: 5px;
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  font-size: 18px;
}

#footer .footer-top .footer-links ul li {
  border-bottom: 1px solid #262c44;
  padding: 10px 0;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #eee;
}

#footer .footer-top .footer-links ul a:hover {
  color: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
}

#footer .footer-top .footer-rsvp {
  margin-bottom: 30px;
}

#footer .footer-top .footer-rsvp p {
  line-height: 26px;
}

#footer .footer-top .footer-newsletter {
  margin-bottom: 30px;
}

#footer .footer-top .footer-newsletter input[type="email"] {
  border: 0;
  padding: 6px 8px;
  width: 65%;
}

#footer .footer-top .footer-newsletter input[type="submit"] {
  background: <?php echo $detail[0]->KONF_WEB_WARNA ?>;
  border: 0;
  width: 35%;
  padding: 6px 0;
  text-align: center;
  color: #fff;
  transition: 0.3s;
  cursor: pointer;
}

#footer .footer-top .footer-newsletter input[type="submit"]:hover {
  background: #e0072f;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  text-align: center;
  font-size: 13px;
  color: #ddd;
}

</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#intro">The<span>Event</span></a></h1> -->
        <h1><a href="#intro"><?php echo $detail[0]->KONF_WEB_JUDUL; ?></a></h1>
        <!-- <a href="index.html" class="scrollto"><img src="<?php echo base_url(); ?>assets/theme/assets/img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url() ?>">Intro</a></li>
          <li><a href="#pembukaan">Pembukaan</a></li>
          <li><a href="#pengantin">Pengantin</a></li>
          <li><a href="#jadwal">Jadwal & Lokasi</a></li>
          <li><a href="#hotels">Hotels</a></li>
          <li><a href="#gallery">Galleri</a></li>
          <li><a href="#rsvp">RSVP</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-2 pb-0"><?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA; ?> <span>&</span> <?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA; ?></h1>
      <p class="mb-4 pb-0">
        <?php
        if($detail[0]->KONF_JADWAL_INTRO == "acara1")
        {
          echo tanggal($detail[0]->KONF_JADWAL_ACARA1_TANGGAL);
          echo ", ";
          echo date('g:i A', strtotime($detail[0]->KONF_JADWAL_ACARA1_JAM));
          echo "<br>";
          echo $detail[0]->KONF_JADWAL_ACARA1_ALAMAT;
        }
        else if($detail[0]->KONF_JADWAL_INTRO == "acara2")
        {
          echo tanggal($detail[0]->KONF_JADWAL_ACARA2_TANGGAL);
          echo ", ";
          echo date('g:i A', strtotime($detail[0]->KONF_JADWAL_ACARA2_JAM));
          echo "<br>";
          echo $detail[0]->KONF_JADWAL_ACARA2_ALAMAT;
        }
         ?>
      </p>
      <?php if($detail[0]->KONF_VIDEO_STATUS == "on"){
      ?>
        <a href="<?php echo $detail[0]->KONF_VIDEO_LINK; ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      <?php
      }
      else{

      }
      ?>

    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= pembukaan Section ======= -->
    <section id="pembukaan">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12">
            <h2><?php echo $detail[0]->KONF_PEMBUKAAN_JUDUL; ?></h2>
            <p><?php echo $detail[0]->KONF_PEMBUKAAN_ISI; ?></p>
          </div>
        </div>
      </div>
    </section><!-- End pembukaan Section -->

    <!-- ======= pengantin Section ======= -->
    <section id="pengantin">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Memperkenalkan</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="http://localhost/Wedding/Wedding-CP/uploads/cover/<?php echo $detail[0]->KONF_PENGANTIN_PRIA_FOTO ?>" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="#"><?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA_LENGKAP; ?></a></h3>
                <p><?php echo $detail[0]->KONF_PENGANTIN_PRIA_NAMA; ?></p>
              </div>
            </div>
            <p class="detail_pengantin"><?php echo $detail[0]->KONF_PENGANTIN_PRIA_KETERANGAN; ?></p>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="http://localhost/Wedding/Wedding-CP/uploads/cover/<?php echo $detail[0]->KONF_PENGANTIN_WANITA_FOTO ?>" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="#"><?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA_LENGKAP; ?></a></h3>
                <p><?php echo $detail[0]->KONF_PENGANTIN_WANITA_NAMA; ?></p>
              </div>
            </div>
            <p class="detail_pengantin"><?php echo $detail[0]->KONF_PENGANTIN_WANITA_KETERANGAN; ?></p>
          </div>
        </div>
      </div>

    </section><!-- End pengantin Section -->


    <!-- ======= jadwal Section ======= -->
    <section id="jadwal" class="section-with-bg">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Jadwal</h2>
          <p>Event jadwal location info and gallery</p>
        </div>

        <?php
        if($detail[0]->KONF_JADWAL_ACARA1_STATUS == "on"){
        ?>
        <div class="row no-gutters mb-4">
          <div class="col-lg-6 jadwal-map">
            <iframe src="https://maps.google.com/maps?q=<?php echo str_replace(" ","",$detail[0]->KONF_JADWAL_ACARA1_MAP); ?>&hl=in&z=16&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 jadwal-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3><?php echo $detail[0]->KONF_JADWAL_ACARA1_JUDUL; ?><br><small class="text-muted"><?php echo tanggal($detail[0]->KONF_JADWAL_ACARA1_TANGGAL); ?>, <?php echo date('g:i A', strtotime($detail[0]->KONF_JADWAL_ACARA1_JAM)) ?></small></h3>
                <p><?php echo $detail[0]->KONF_JADWAL_ACARA1_ALAMAT; ?></p>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <?php
        }
        ?>

        <?php
        if($detail[0]->KONF_JADWAL_ACARA2_STATUS == "on"){
        ?>
        <div class="row no-gutters mt-4">
          <div class="col-lg-6 jadwal-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3><?php echo $detail[0]->KONF_JADWAL_ACARA2_JUDUL; ?><br><small class="text-muted"><?php echo tanggal($detail[0]->KONF_JADWAL_ACARA2_TANGGAL); ?>, <?php echo date('g:i A', strtotime($detail[0]->KONF_JADWAL_ACARA2_JAM)) ?></small></h3>
                <p><?php echo $detail[0]->KONF_JADWAL_ACARA2_ALAMAT; ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 jadwal-map">
            <iframe src="https://maps.google.com/maps?q=<?php echo str_replace(" ","",$detail[0]->KONF_JADWAL_ACARA2_MAP); ?>&hl=in&z=16&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <?php
        }
        ?>

      </div>

    </section><!-- End jadwal Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Galeri</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
        <a href="<?php echo base_url(); ?>assets/theme/assets/img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?php echo base_url(); ?>assets/theme/assets/img/gallery/1.jpg" alt=""></a>
        <a href="<?php echo base_url(); ?>assets/theme/assets/img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?php echo base_url(); ?>assets/theme/assets/img/gallery/2.jpg" alt=""></a>
        <a href="<?php echo base_url(); ?>assets/theme/assets/img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?php echo base_url(); ?>assets/theme/assets/img/gallery/3.jpg" alt=""></a>
        <a href="<?php echo base_url(); ?>assets/theme/assets/img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?php echo base_url(); ?>assets/theme/assets/img/gallery/4.jpg" alt=""></a>
        <a href="<?php echo base_url(); ?>assets/theme/assets/img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?php echo base_url(); ?>assets/theme/assets/img/gallery/5.jpg" alt=""></a>
        <a href="<?php echo base_url(); ?>assets/theme/assets/img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?php echo base_url(); ?>assets/theme/assets/img/gallery/6.jpg" alt=""></a>
        <a href="<?php echo base_url(); ?>assets/theme/assets/img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?php echo base_url(); ?>assets/theme/assets/img/gallery/7.jpg" alt=""></a>
        <a href="<?php echo base_url(); ?>assets/theme/assets/img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?php echo base_url(); ?>assets/theme/assets/img/gallery/8.jpg" alt=""></a>
      </div>

    </section><!-- End Gallery Section -->

    <?php
    if($detail[0]->KONF_INFORMASI_STATUS == "on"){
    ?>
    <!-- ======= Subscribe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2><?php echo $detail[0]->KONF_INFORMASI_JUDUL; ?></h2>
          <p><?php echo $detail[0]->KONF_INFORMASI_ISI; ?></p>
        </div>

      </div>
    </section><!-- End Subscribe Section -->
<?php } ?>


    <!-- ======= rsvp Section ======= -->
    <section id="rsvp" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>RSVP</h2>
          <p>Mohon dijawab.</p>
        </div>
        <div class="form">
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
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan"></textarea>
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
    </section><!-- End rsvp Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX rsvp form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/theme/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/assets/vendor/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/theme/assets/js/main.js"></script>

</body>

</html>
