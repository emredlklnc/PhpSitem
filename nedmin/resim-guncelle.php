


<?php 

include 'header.php';

include 'netting/baglan.php';


date_default_timezone_set('Europe/Istanbul');

$kontrol=$_GET['resim_id'];

$resim=$db->prepare("SELECT * from galeriresim where resim_id=?");

$resim->execute(array($kontrol));

$resimcek=$resim->fetch(PDO::FETCH_ASSOC);

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Resim İşlemler </h3>
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
                    <h2>Resim Ekleme

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

                      <input type="hidden" name="resim_id" value="<?php echo $resimcek['resim_id']; ?>">

                       <input type="hidden" name="eskiresimyol" value="<?php echo $resimcek['resim_resimyol']; ?>">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim(850X567)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img style="width: 250px; height: 150px;" src="../<?php echo $resimcek['resim_resimyol']; ?>">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç(850X567)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name"   name="resim_resimyol" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Ad<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $resimcek['resim_ad']; ?>" name="resim_ad" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Eski Zaman Degeri<span class="required">*</span>
                        </label>
                         <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"><?php echo $resimcek['resim_tarih'];  ?>
                          </label>                        
                      </div>



                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Değiştirilme Tarihi<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="date" id="first-name"  name="resim_trh" value="<?php echo date('Y-m-d'); ?>" class="form-control col-md-7 col-xs-12">
                        
                        </div>
                         <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="time" id="first-name" name="resim_saat" value="<?php echo date("H:i:s"); ?>"" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Başlık<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $resimcek['resim_baslik']; ?>" name="resim_baslik" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       
                     
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          
                          <select class="form-control" name="resim_kategori">
                                  <option value="Karikatür">Karikatür</option>
                                  <option value="Yazılım">Yazılım</option>
                                  <option value="Bilgisayar">Bilgisayar</option>
                                  <option value="Web Tasrımı">Web Tasrımı</option>
                                  <option value="Sosyal Media">Sosyal Media</option>
                          </select>
                        </div>
                        <label class="col-md-3">Eski Katagori(<?php  echo $resimcek['resim_kategori'];?>)</label>
                      </div>

                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="resimguncelle" class="btn btn-primary">GÜNCELLE</button>
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