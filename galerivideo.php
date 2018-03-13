<?php 

include 'header.php';
include 'slider.php';

 $galvideosor=$db->prepare("select * from galerivideo order by galvideo_tarih DESC limit 25");
 $galvideosor->execute();
 ?>

	<!-- Start Page Header area
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">Portfolio</h1>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Page Header area -->

	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

	
	<!-- Start main content -->

	<section id="mu-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-portfolio-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Video Galrisi</h2>
										<p>Her Alanda Kendinizi Geliştirin</p>
									</div>
								</div>
							</div>

							<div class="row">
									<!-- Start Portfolio Filter -->
									





									
									<!-- Start Portfolio Content -->
									<div class="mu-portfolio-content">
										<div class="filtr-container">



								<?php 

                                  while($galvideocek=$galvideosor->fetch(PDO::FETCH_ASSOC))
                                  { ?>


							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="2">
							                   <a class="" href="" title="PAINTING">
								                   	<iframe src="https://www.youtube.com/embed/<?php echo $galvideocek['galvideo_embed']; ?>" allowfullscreen></iframe>  
							                   </a>
							                   <h6><?php echo $galvideocek['galvideo_baslik']; ?></h6>
							                   <p><?php echo $galvideocek['galvideo_ad']; ?></p>
							                   <br>
							                </div>
							                 


							         <?php } ?>
							                 



							            </div>
									</div>




									<!-- End Portfolio Content -->
								</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	
	<!-- End main content -->	
			
			
<?php 

include 'footer.php';
 ?>