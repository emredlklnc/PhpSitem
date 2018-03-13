<?php 

include 'nedmin/netting/baglan.php'; 
$hizmetsor=$db->prepare("select * from hizmetler");
$hizmetsor->execute();



 ?>


<section id="mu-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-portfolio-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Projelerimiz</h2>
										<p>Kategori Seçerek İstediginiz Alandaki Projelerimizi Keşfedeilirsiniz.</p>
									</div>
								</div>
							</div>

							<div class="row">
									<!-- Start Portfolio Filter -->
									<div class="mu-portfolio-filter-area">
										<ul class="mu-simplefilter">
							                <li class="active" data-filter="all">All<span>/</span></li>
							                <li data-filter="1">Web design<span>/</span> </li>
							                <li data-filter="2">Mobile Development<span>/</span></li>
							                <li data-filter="3">E-commerces<span>/</span></li>
							                <li data-filter="4">Arts<span>/</span> </li>
							                <li data-filter="5">Branding</li>
							            </ul>
									</div>





									
									<!-- Start Portfolio Content -->
									<div class="mu-portfolio-content">
										<div class="filtr-container">


										<?php 
											while($hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC))
							                { 

							                if ($hizmetcek['hizmet_kategori']=="Mobile Development") { ?>
							                	
							              

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="2">
							                   <a class="mu-imglink" href="<?php echo $hizmetcek['hizmet_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $hizmetcek['hizmet_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $hizmetcek['hizmet_baslik']; ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <?php }elseif($hizmetcek['hizmet_kategori']=="E-commerces"){ ?>


											<div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="3">
							                   <a class="mu-imglink" href="<?php echo $hizmetcek['hizmet_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $hizmetcek['hizmet_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $hizmetcek['hizmet_baslik']; ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <?php }elseif($hizmetcek['hizmet_kategori']=="Arts"){ ?>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="4">
							                   <a class="mu-imglink" href="<?php echo $hizmetcek['hizmet_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $hizmetcek['hizmet_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $hizmetcek['hizmet_baslik']; ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

											<?php }elseif($hizmetcek['hizmet_kategori']=="Branding"){ ?>


							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="5">
							                   <a class="mu-imglink" href="<?php echo $hizmetcek['hizmet_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $hizmetcek['hizmet_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $hizmetcek['hizmet_baslik']; ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <?php }elseif($hizmetcek['hizmet_kategori']=="Web design"){ ?>

							                  <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
							                   <a class="mu-imglink" href="<?php echo $hizmetcek['hizmet_resimyol']; ?>" title="PAINTING">
								                   	<img class="img-responsive" src="<?php echo $hizmetcek['hizmet_resimyol']; ?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php echo $hizmetcek['hizmet_baslik']; ?></h4>
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