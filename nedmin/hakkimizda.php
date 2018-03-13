<?php 

include 'header.php';

include 'netting/baglan.php';

$hakkımızdasor=$db->prepare("SELECT * from hakkimizda where hakkimizda_id=?");
$hakkımızdasor->execute(array(0));
$hakkımızdacek=$hakkımızdasor->fetch(PDO::FETCH_ASSOC);

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>HAKKIMIZDA</h3>
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
                    <h2>Hakkımızda Vizyon Misyon Ayarları <small>

                      <?php 
                      if($_GET['durum']=='ok')
                        { ?>
                          <b style="color: green;">Güncelleme Başarılı..</b>

                       <?php } else if($_GET['durum']=='no'){ ?>

                          <b style="color: red;">Güncelleme Yapılamadı..</b>

                       <?php } ?>
                          
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


                      <input type="hidden" name="eskiresimyol" value="<?php echo $hakkımızdacek['hakkimizda_resim']; ?>">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim (558X460)<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <img style="width:200px; height: 150px;" src="../<?php echo $hakkımızdacek['hakkimizda_resim']; ?>">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç (558X460)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name"   name="hakkimizda_resim" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $hakkımızdacek['hakkimizda_baslik']; ?>" name="hakkimizda_baslik" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alt Başlık <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $hakkımızdacek['hakkimizda_altbaslik']; ?>" name="hakkimizda_altbaslik" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik<span class="required">*</span>
                        </label>
                              <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <textarea class="resizable_textarea form-control" name="hakkimizda_icerik" placeholder="İçerik Bilgisi Giriniz.."><?php echo $hakkımızdacek['hakkimizda_icerik']; ?></textarea>
                                    </div>
                              </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vizyon<span class="required">*</span>
                        </label>
                              <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <textarea class="resizable_textarea form-control" name="hakkimizda_vizyon" placeholder="Vizyon Bilgisi Giriniz.."><?php echo $hakkımızdacek['hakkimizda_vizyon']; ?></textarea>
                                    </div>
                              </div>

                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Misyon<span class="required">*</span>
                        </label>
                              <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <textarea class="resizable_textarea form-control" name="hakkimizda_misyon" placeholder="Misyon Bilgisi Giriniz.."><?php echo $hakkımızdacek['hakkimizda_misyon']; ?></textarea>
                                    </div>
                              </div>

                      </div>

                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="hakguncelle" class="btn btn-primary">Güncelle</button>
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