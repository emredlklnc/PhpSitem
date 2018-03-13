<?php 

include 'header.php';

include 'netting/baglan.php';




$kontrol=$_GET['slider_id'];

$siledirsor=$db->prepare("SELECT * from slider where slider_id=?");

$siledirsor->execute(array($kontrol));

$slidercek=$siledirsor->fetch(PDO::FETCH_ASSOC);

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Slider İşlemler </h3>
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
                    <h2>Slider Ekleme

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

                      <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']; ?>">

                       <input type="hidden" name="eskiresimyol" value="<?php echo $slidercek['slider_resimyol']; ?>">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim(2200X900)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img style="width: 250px; height: 150px;" src="../<?php echo $slidercek['slider_resimyol']; ?>">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç(2200X900)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name"   name="slider_resimyol" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Ad<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $slidercek['slider_ad']; ?>" name="slider_ad" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Link<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  value="<?php echo $slidercek['slider_link']; ?>" name="slider_link" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $slidercek['slider_sira']; ?>" name="slider_sira" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" name="slider_durum" class="form-control" required>
                            <?php 
                                if ($slidercek['slider_durum']==1) { ?>
                                 
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>

                               <?php }
                                else{ ?>
                                    <option value="0">Pasif</option>
                                    <option value="1">Aktif</option>

                                <?php }  ?>
                            
                          </select>
                        </div>
                      </div>

                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="sliderguncelle" class="btn btn-primary">GÜNCELLE</button>
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