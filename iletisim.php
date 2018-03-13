<?php 
include 'header.php';
include 'slider.php';

 ?>

	<!-- Start Page Header area -->


	<!-- End Page Header area -->

	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

	
	<!-- Start main content -->
	<main>
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Bize Yazın</h2>
										<p>Tüm istek ve önerilerinizi bize yazın</p>
									</div>
								</div>
							</div>
								<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

									<div class="col-md-12">
										<div class="mu-contact-form-area">
											<div id="form-messages"></div>
											<form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">

												<div class="form-group">  
													<span class="fa fa-user mu-contact-icon"></span>              
													<input type="text" class="form-control" placeholder="Adınız Soyadınız" id="name" name="name" required>
												</div>

												<div class="form-group">  
													<span class="fa fa-envelope mu-contact-icon"></span>              
													<input type="email" class="form-control" placeholder="Mail Adresiniz" id="email" name="email" required>
												</div>    

												<div class="form-group"> 
													<span class="fa fa-folder-open-o mu-contact-icon"></span>                
													<input type="text" class="form-control" placeholder="Konu " id="subject" name="subject" required>
												</div>

												<div class="form-group">
													<span class="fa fa-pencil-square-o mu-contact-icon"></span> 
													<textarea class="form-control" placeholder="Mesajınız..." id="message" name="message" required></textarea>
												</div>
												<button type="submit" name="mailgonder" class="mu-send-msg-btn"><span>Mesaj Gönder</span></button>
								        	</form>
										</div>
									</div>

								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->
		<!--Kocaeli,Gebze/Kocaeli-->
		<!-- Google map -->
		<div id="mu-google-map">
			<iframe
		  		frameborder="0" style="border:0"
		  		src="https://www.google.com/maps/embed/v1/place?key=<?php echo $ayarcek['ayar_goooglemap']; ?>
		    &q=<?php echo $ayarcek['ayar_adres']; ?>" allowfullscreen>
		</iframe>
		</div>


	</main>
	
	<!-- End main content -->	
			
			
	<?php 
include 'footer.php';

 ?>