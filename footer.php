<!-- Start footer -->
<?php 

$twitsor=$db->prepare("SELECT * from twit where twit_id=?");
$twitsor->execute(array(1));
$twitcek=$twitsor->fetch(PDO::FETCH_ASSOC);


$twitsor2=$db->prepare("SELECT * from twit where twit_id=?");
$twitsor2->execute(array(2));
$twitcek2=$twitsor2->fetch(PDO::FETCH_ASSOC);
 ?>
	<footer id="mu-footer">
		<div class="mu-footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="mu-single-footer">
							<!--assets/images/logo.png-->
							<img class="mu-footer-logo" src="<?php echo $ayarcek['ayar_logo']; ?>" alt="<?php echo $ayarcek['ayar_title']; ?> logosu">
							<p><?php echo $ayarcek['ayar_description']; ?></p>
							<div class="mu-social-media">
								<a target="_blank" href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook"></i></a>
								<a class="mu-twitter" target="_blank" href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter"></i></a>
								<a class="mu-linkedin" target="_blank" href="<?php echo $ayarcek['ayar_in']; ?>"><i class="fa fa-linkedin"></i></a>
								<a class="mu-google-plus" target="_blank" href="<?php echo $ayarcek['ayar_in']; ?>"><i class="fa fa-google-plus"></i></a>
								<a class="mu-youtube" target="_blank" href="<?php echo $ayarcek['ayar_youtube']; ?>"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="mu-single-footer">
							<h3>TWİTTER ADRES</h3>
							<ul class="list-unstyled">
							  	<li class="media">
								   <span class="fa fa-twitter"></span>
								    <div class="media-body">
								    	<p><strong>@<?php echo $twitcek['twit_sahibi']; ?></strong> :<?php echo $twitcek['twit_icerik'];?></p>
								    	<a href="#">2 hours ago</a>
								    </div>
							  	</li>
							  	<li class="media">
								   	<span class="fa fa-twitter"></span>
								    <div class="media-body">
								    	<p><strong>@<?php echo $twitcek2['twit_sahibi'];?></strong> :<?php echo $twitcek2['twit_icerik'];?></p>
								    	<a href="#">2 hours ago</a>
								    </div>
							  	</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="mu-single-footer">
							<h3>LİNKLER</h3>
							<ul class="mu-useful-links">
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Download Center</a></li>
								<li><a href="#">User Account</a></li>
								<li><a href="#">Support Forum</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="mu-single-footer">
							<h3>İLETİŞİM BİLGİLERİ</h3>
							<ul class="list-unstyled">
							  <li class="media">
							    <span class="fa fa-home"></span>
							    <div class="media-body">
							    	<p><?php echo $ayarcek['ayar_adres']; ?></p>
							    </div>
							  </li>
							  <li class="media">
							    <span class="fa fa-phone"></span>
							    <div class="media-body">
							       <p><?php echo $ayarcek['ayar_tel']; ?></p>
							     	<p><?php echo $ayarcek['ayar_gsm']; ?></p>
							    </div>
							  </li>
							  <li class="media">
							    <span class="fa fa-envelope"></span>
							    <div class="media-body">
							     <p><?php echo $ayarcek['ayar_mail']; ?></p>
							     <p><?php echo $ayarcek['ayar_mail']; ?></p>
							    </div>
							  </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mu-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-footer-bottom-area">
							<p class="mu-copy-right">&copy; Copyright <a rel="nofollow" target="_blank" href="<?php echo $ayarcek['ayar_copylink']; ?>"><?php echo $ayarcek['ayar_copyad']; ?></a>. Bütün hakları saklıdır.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	
	<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Progress Bar -->
   <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>

     <!--<script src="assets/js/circle.js"></script>-->
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    
	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<!-- About us Skills Circle progress  -->
	<script>
		// First circle
	    new Circlebar({
        element : "#circle-1",
        type : "progress",
	      maxValue:  "90"
	    });
		
		// Second circle
	    new Circlebar({
        element : "#circle-2",
        type : "progress",
	      maxValue:  "84"
	    });

	    // Third circle
	    new Circlebar({
        element : "#circle-3",
        type : "progress",
	      maxValue:  "60"
	    });

	    // Fourth circle
	    new Circlebar({
        element : "#circle-4",
        type : "progress",
	      maxValue:  "74"
	    });

	</script>
    
  </body>
</html>