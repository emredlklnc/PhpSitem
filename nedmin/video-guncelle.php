


<?php 

include 'header.php';

include 'netting/baglan.php';


date_default_timezone_set('Europe/Istanbul');

$kontrol=$_GET['galvideo_id'];

$galvideo=$db->prepare("SELECT * from galerivideo where galvideo_id=?");

$galvideo->execute(array($kontrol));

$galvideocek=$galvideo->fetch(PDO::FETCH_ASSOC);

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Galeri Video İşlemleri </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                 
                  <div class="x_content">
                      
                    <!--tablo başlangıc-->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Galeriye Video 

                        <?php 
                      if($_GET['durum']=='ok')
                        { ?>
                          <b style="color: green;">Güncelleme Başarılı..</b>

                       <?php } else if($_GET['durum']=='no'){ ?>

                          <b style="color: red;">Güncelleme Yapılamadı..</b>

                       <?php } ?>



                      <small>

                          
                        </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                     
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    


                    <!--form bitis-->
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="netting/islem.php" method="POST" enctype="multipart/form-data">

                      <input type="hidden" name="galvideo_id" value="<?php echo $galvideocek['galvideo_id']; ?>">
                                           

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Galeri Video (Embed)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $galvideocek['galvideo_embed']; ?>" name="galvideo_embed" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>




                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Galeri Video Bilgi(150 karekter)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <textarea class="resizable_textarea form-control" name="galvideo_ad" ><?php echo $galvideocek['galvideo_ad']; ?></textarea>

                        </div>
                      </div>




                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Eski Zaman Degeri<span class="required">*</span>
                        </label>
                         <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"><?php echo $galvideocek['galvideo_tarih'];  ?>
                          </label>                        
                      </div>



                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Değiştirilme Tarihi<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="date" id="first-name"  name="galvideo_trh" value="<?php echo date('Y-m-d'); ?>" class="form-control col-md-7 col-xs-12">
                        
                        </div>
                         <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="time" id="first-name" name="galvideo_saat" value="<?php echo date("H:i:s"); ?>"" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video Başlık<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $galvideocek['galvideo_baslik']; ?>" name="galvideo_baslik" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       
                     
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $galvideocek['galvideo_kategori']; ?>" name="galvideo_kategori" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="galvideoguncelle" class="btn btn-primary">GÜNCELLE</button>
                        </div>
                      </div>
                    </form>

                    <!--form bitis-->
            
                  </div>
                </div>
              </div>



<!--tablo bitiş-->



                  </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
   <?php include 'footer.php'; ?>