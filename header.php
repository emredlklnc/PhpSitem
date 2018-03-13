<?php 
include 'nedmin/netting/baglan.php';
include 'nedmin/fonksiyonlar.php';
$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
  	<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
  	<meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title><?php echo $ayarcek['ayar_title']; ?></title>
    <!-- Favicon -->
    <!-- BURADAKI ICINU DEGISTIRECEKTIN UNUTMAAAAAAAAAAAAAAAAAAA -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Skills Circle CSS  -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">
    

    <!-- Main Style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
 
 
	</head>
  <body>

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->
  	
  	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<!-- Text based logo -->
				<a class="navbar-brand mu-logo" href="index.php"><span><?php echo $ayarcek['ayar_logoisim']; ?></span></a>
				<!-- image based logo -->
			   	<!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto mu-navbar-nav">

			    	<!--buraya php if yaz eger adres satırında index.php ise calas=nav item active else nav item-->
			      <!--<li class="nav-item active">
			        <a href="index.php">ANASAYFA</a>
			      </li>-->
			        <li class="nav-item">
			        <a href="index.php">ANASAYFA</a>
			      </li>
			      <li class="nav-item"><a href="hakkimda.php">HAKKIMIZDA</a></li>
			      <li class="nav-item"><a href="servisler.php">YAZILIM SERVİSLERİ</a></li>
			      <li class="nav-item"><a href="urunler.php">ÜRÜNLER</a></li>
			      <li class="nav-item"><a href="blog.php">Blog Sayfası</a></li>



			       <li class="nav-item dropdown">
				        <a class="dropdown-toggle" href="blog.html" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
				       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="galerivideo.php">Video Galerisi</a>
				          <a class="dropdown-item" href="galeriresim.php">Resim Galerisi</a>
				        </div>
				    </li>




			        <li class="nav-item"><a href="iletisim.php">İLETİŞİM</a></li>
			        <!--<li class="nav-item"><a href="404.php">404 Page</a></li>-->
			    </ul>
			  </div>
			</nav>
		</div>
	</header>
	<!-- End Header -->