<?php 
include 'nedmin/netting/baglan.php';
  $servissor=$db->prepare("select * from servisler ");
   $servissor->execute();
 ?>





	<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<!-- Title -->





							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>SERVİSLERİMİZ</h2>
										<p>Yenilikçi Dünyanın Kapılarını Aralayın</p>
									</div>
								</div>
							</div>



							<!-- Start Service Content -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-service-content">
										<div class="row">
											<!-- Start single service -->
											


										<!--buraya dongu gelecek -->

										<?php 
											while($serviscek=$servissor->fetch(PDO::FETCH_ASSOC))
							                { ?>


											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="<?php echo $serviscek['servis_icon']; ?>" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3><?php echo $serviscek['servis_baslik']; ?></h3>
														<p><?php echo $serviscek['servis_icerik']; ?></p>
													</div>
												</div>
											</div>

											<?php } ?>





											<!-- End single service -->
											<!-- Start single service -->
										
											<!-- End single service -->
											<!-- Start single service -->
											
										
										
											<!-- End single service -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Service Content -->
						</div>
					</div>
				</div>
			</div>
		</section>