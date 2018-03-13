
<?php 
include 'header.php';
include 'slider.php';
$hakkımızdasor=$db->prepare("SELECT * from hakkimizda where hakkimizda_id=?");
$hakkımızdasor->execute(array(0));
$hakkımızdacek=$hakkımızdasor->fetch(PDO::FETCH_ASSOC);
 ?>

	<!-- Start Page Header area 
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">Hakkımızda...</h1>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End Page Header area -->

	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

	
	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2><?php echo $hakkımızdacek['hakkimizda_baslik']; ?></h2>
										<p><?php echo $hakkımızdacek['hakkimizda_altbaslik']; ?></p>
									</div>
								</div>
							</div>
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="<?php echo $hakkımızdacek['hakkimizda_resim']; ?>" alt="img">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<ul>
											<li>
												<h3>Misyonumuz</h3>
												<p><?php echo $hakkımızdacek['hakkimizda_misyon']; ?></p>
											</li>
											<li>
												<h3>Vizyonumuz</h3>
												<p><?php echo $hakkımızdacek['hakkimizda_vizyon']; ?></p>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Start Skills -->
		
		<!-- End Skills -->

		<!-- Start Team -->
		<!--<section id="mu-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-team-area">
							
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Takım Arkadaşlarımız</h2>
										<p></p>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="mu-team-content">
										<div class="row">
											
											<div class="col-md-6">
												<div class="mu-single-team">
													<div class="mu-single-team-img">
														<img src="assets/images/team-member.jpg" alt="img">
													</div>
													<div class="mu-single-team-content">
														<h3>Hannah Torres</h3>
														<span>Founder</span>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
														<ul class="mu-team-social">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="mu-single-team">
													<div class="mu-single-team-img">
														<img src="assets/images/team-member.jpg" alt="img">
													</div>
													<div class="mu-single-team-content">
														<h3>Hannah Torres</h3>
														<span>Founder</span>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
														<ul class="mu-team-social">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="mu-single-team">
													<div class="mu-single-team-img">
														<img src="assets/images/team-member.jpg" alt="img">
													</div>
													<div class="mu-single-team-content">
														<h3>Hannah Torres</h3>
														<span>Founder</span>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
														<ul class="mu-team-social">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="mu-single-team">
													<div class="mu-single-team-img">
														<img src="assets/images/team-member.jpg" alt="img">
													</div>
													<div class="mu-single-team-content">
														<h3>Hannah Torres</h3>
														<span>Founder</span>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
														<ul class="mu-team-social">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
														</ul>
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
			</div>
		</section>
		-->

		<!-- Start Clients -->
		<div id="mu-clients">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-clients-area">

							<!-- Start Clients brand logo -->
							<div class="mu-clients-slider">

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-1.jpg" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-2.jpg" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-3.jpg" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-4.jpg" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-5.jpg" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-6.jpg" alt="Brand Logo">
								</div>
							</div>
							<!-- End Clients brand logo -->

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Clients -->

	</main>
	
	<!-- End main content -->	
			
			
<?php 
include 'footer.php';
 ?>