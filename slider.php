
<?php 

include 'nedmin/netting/baglan.php';

 ?>
<!-- Start slider area -->


	<div id="mu-slider">
		<div class="mu-slide">
			<!-- Start single slide  -->



					<?php 
                                $slidersor=$db->prepare("select * from slider order by slider_id DESC limit 25");
                                $slidersor->execute();
                                

                                  while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC))
                                  { ?>
                                  			<?php if ($slidercek['slider_durum']==1){

                                  			 ?>
												<div class="mu-single-slide">
													<img src="<?php echo $slidercek['slider_resimyol']; ?>" alt="slider img">
													<div class="mu-single-slide-content-area">
														<div class="container">
															<div class="row">
																<div class="col-md-12">
																	<div class="mu-single-slide-content">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<?php }else{

													
												} ?>

			<!-- End single slide  --><?php } ?>

			<!-- Start single slide  -->
			
			<!-- End single slide  -->

			<!-- Start single slide  -->
		
			<!-- End single slide  -->
		</div>
	</div>
	<!-- End Slider area -->