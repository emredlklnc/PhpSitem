<?php 

include 'header.php';
include 'slider.php';
 ?>

	<!-- Start Page Header area 
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">Our exclusive services</h1>
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
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Services</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->
	
	<!-- Start main content -->
	<main>
		
		<!-- Start Services -->
		<?php include 'servislerimiz.php'; ?>
		<!-- End Services -->	

		<!-- Start Counter -->
	<?php include 'doluluk.php' ?>
		<!-- End Counter -->

		<!-- Start Pricing Table -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Satın Alma İşlemleri</h2>
										<p></p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mu-pricing-content">
										<ul class="mu-pricing-table">
											<li>
												<div class="mu-pricing-single">
													<div class="mu-pricing-single-icon">
														<span class="fa fa-user"></span>
													</div>
													<div class="mu-pricing-single-title">
														<h3>Basic</h3>
													</div>
													<div class="mu-pricing-single-content">
														<ul>
															<li>Standart Paket</li>
															<li>Admin Panel</li>
															<li>Ürün Destegi</li>
															<li>Mysql Veri Tabanı</li>
														</ul>
													</div>
													<div class="mu-single-pricebox">
														<h4>29$<span>/month</span></h4>
													</div>
													<a class="mu-buy-now-btn" href="#">Satın Al</a>
												</div>
											</li>
											<li class="mu-standard-pricing">
												<div class="mu-pricing-single">
													<div class="mu-pricing-single-icon">
														<span class="fa fa-lock"></span>
													</div>
													<div class="mu-pricing-single-title">
														<h3>Standard</h3>
													</div>
													<div class="mu-pricing-single-content">
														<ul>
															<li>Standart Paket</li>
															<li>Admin Panel</li>
															<li>Ürün Destegi</li>
															<li>Mysql Veri Tabanı</li>
														</ul>
													</div>
													<div class="mu-single-pricebox">
														<h4>99$<span>/month</span></h4>
													</div>
													<a class="mu-buy-now-btn" href="#">Satın Al</a>
												</div>
											</li>
											<li>
												<div class="mu-pricing-single">
													<div class="mu-pricing-single-icon">
														<span class="fa fa-paper-plane"></span>
													</div>
													<div class="mu-pricing-single-title">
														<h3>Premium</h3>
													</div>
													<div class="mu-pricing-single-content">
														<ul>
															<li>Standart Paket</li>
															<li>Admin Panel</li>
															<li>Ürün Destegi</li>
															<li>Mysql Veri Tabanı</li>
														</ul>
													</div>
													<div class="mu-single-pricebox">
														<h4>229$<span>/month</span></h4>
													</div>
													<a class="mu-buy-now-btn" href="#">Satın Al</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing Table -->


		<!-- Start Client Testimonials -->
		<?php include 'haberyorum.php'; ?>
		<!-- End Client Testimonials -->

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