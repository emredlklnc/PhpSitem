<?php 

include 'header.php';
include 'slider.php';
$videosor=$db->prepare("SELECT * from video where video_id=?");
$videosor->execute(array(0));
$videocek=$videosor->fetch(PDO::FETCH_ASSOC);




 ?>



	
	<!-- Start main content -->
	<main>
		<!-- Start About -->
		
		<!-- End About -->




		<!-- Call to Action   Belki işimize yarar diye açıklama satırı yaptım -->
		<!--<div id="mu-call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-call-to-action-area">
							<div class="mu-call-to-action-left">
								<h2>This is a simple hero unit, a simple jumbotron-style</h2>
								<p>component for calling extra attention to featured content or information.</p>
							</div>
							<a href="#" class="mu-primary-btn mu-quote-btn">Get a Quote <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		
		<!-- Start Services -->
	<?php include 'servislerimiz.php'; ?>
		<!-- End Services -->

		<!-- Start Video -->
		<div id="mu-video">
			<div class="row">
				<div class="col-md-6">
					<div style="background-image: url(upload/youtube.jpg);"  class="mu-video-left">
						<a href="#" class="mu-video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mu-video-right">
						<p><b><?php echo $videocek['video_baslik'];?></b></p>
						<p><?php echo $videocek['video_yazı'];?></p>
					</div>
				</div>
			</div>

			<!-- Start Video Popup -->
			<div class="mu-video-popup">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href=""><i class="fa fa-times" aria-hidden="true" ></i></a>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/<?php echo $videocek['video_icerik'];?>" allowfullscreen></iframe>
				</div>
			</div>
			<!-- End Video Popup -->

		</div>
		<!-- End Video -->

		<!-- Start Portfolio -->
		<?php include 'hizmetler.php'; ?>
		<!-- End Portfolio -->


		



		<!--<?php //include 'satisyap.php' ?>-->

		<!-- Start Client Testimonials -->
		<?php include 'haberyorum.php'; ?>
		<!-- End Client  üstüne ekle Testimonials -->

		<!-- Start from blog -->
		<section id="mu-from-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-from-blog-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Yeni Yazılan Yazılar</h2>
										<p>Daha Önceden yazılmış Olan Yazı Ve Haberleri Blog Sayfaından Bulabilirsiniz.</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mu-from-blog-content">
										<div class="row">
											



												<?php 
														$habergoster=$db->prepare("select * from icerik order by icerik_zaman DESC limit 3");
														$habergoster->execute();

														 while($habercek=$habergoster->fetch(PDO::FETCH_ASSOC))
                                  						{ ?>
                                  							<div class="col-md-4">
																<article class="mu-blog-item">
																	<a href="#"><img style="height: 350px;" src="<?php echo $habercek['icerik_resimyol']; ?>" alt="blgo image"></a>
																	<div class="mu-blog-item-content">
																		<ul class="mu-blog-meta">
																			<li>BY: ADMIN </li>
																			<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
																			<li><i class="fa fa-heart-o"></i>250</li>
																		</ul>
																		<h2 class="mu-blog-item-title"><a href="#"><?php echo $habercek['icerik_baslik']; ?></a></h2>
																		<p> <?php echo substr($habercek['icerik_detay'],0,100); ?></p>
																		<a class="mu-blg-readmore-btn" href="<?=seo($habercek["icerik_baslik"]).'-'.$habercek["icerik_id"];?>">Devamını Oku<i class="fa fa-long-arrow-right"></i></a>
																	</div>
																</article>
																</div>

												 		<?php }	?>

												
												
											
										
												
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End from blog -->

	<?php include 'doluluk.php' ?>
		<!-- End Counter -->



		<!-- Start Newsletter -->
		<section id="mu-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-newsletter-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Arama Yap</h2>
										
									</div>
								</div>
								<div class="col-md-12">
									<div class="mu-newsletter-content">
										

										<form action="http://www.google.com.tr/search?q=" method="get" class="mu-subscribe-form">
											<input type="text" name="q" placeholder="Ara..">
											<button type="su" class="mu-subscribe-btn">Arama Yap</button>
										</form>

											
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>





		<!-- End Newsletter -->

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
	