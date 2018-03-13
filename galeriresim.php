<?php 

include 'header.php';
include 'slider.php';


include 'nedmin/netting/baglan.php'; 
$resimsor=$db->prepare("select * from galeriresim");
$resimsor->execute();
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
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

	
	<!-- Start main content -->
	<main>
		
		<!-- Start Portfolio -->
		<section id="mu-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-portfolio-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Resim Galelerisi</h2>
										<p>Mühendislik Resimleri</p>
									</div>
								</div>
							</div>

							<div class="row">
									<!-- Start Portfolio Filter -->
									<div class="mu-portfolio-filter-area">
										<ul class="mu-simplefilter">
							                <li class="active" data-filter="all">All<span>/</span></li>
							                <li data-filter="1">Karikatür<span>/</span> </li>
							                <li data-filter="2">Yazılım<span>/</span></li>
							                <li data-filter="3">Bilgisayar<span>/</span></li>
							                <li data-filter="4">Web Tasrımı<span>/</span> </li>
							                <li data-filter="5">Sosyal Media</li>
							            </ul>
									</div>





									
									<!-- Start Portfolio Content -->
									<div class="mu-portfolio-content">
										<div class="filtr-container">


										<?php 
											while($resimcek=$resimsor->fetch(PDO::FETCH_ASSOC))
							                { 

							                if ($resimcek['resim_kategori']=="Karikatür") { ?>
							                	
							              

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="2">
							                   <a class="mu-imglink" href="<?php echo $resimcek['resim_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $resimcek['resim_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $resimcek['resim_baslik']; ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <?php }elseif($resimcek['resim_kategori']=="Yazılım"){ ?>


											<div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="3">
							                   <a class="mu-imglink" href="<?php echo $resimcek['resim_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $resimcek['resim_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $resimcek['resim_baslik']; ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <?php }elseif($resimcek['resim_kategori']=="Bilgisayar"){ ?>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="4">
							                   <a class="mu-imglink" href="<?php echo $resimcek['resim_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $resimcek['resim_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $resimcek['resim_baslik']; ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

											<?php }elseif($resimcek['resim_kategori']=="Web Tasrımı"){ ?>


							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="5">
							                   <a class="mu-imglink" href="<?php echo $resimcek['resim_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $resimcek['resim_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $resimcek['resim_baslik']; ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <?php }elseif($resimcek['resim_kategori']=="Sosyal Media"){ ?>

							                  <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
							                   <a class="mu-imglink" href="<?php echo $resimcek['resim_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $resimcek['resim_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $resimcek['resim_baslik']; ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <?php } ?>
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
		<!-- End Portfolio -->

	</main>
	
	<!-- End main content -->	
			
			
<?php 

include 'footer.php';
 ?>