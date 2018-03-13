<?php 

include 'header.php';

include 'netting/baglan.php';

$twitsor=$db->prepare("SELECT * from twit where twit_id=?");
$twitsor->execute(array(1));
$twitcek=$twitsor->fetch(PDO::FETCH_ASSOC);


$twitsor2=$db->prepare("SELECT * from twit where twit_id=?");
$twitsor2->execute(array(2));
$twitcek2=$twitsor2->fetch(PDO::FETCH_ASSOC);
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>TWİT AT</h3>
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
                    <h2>Anasayfada Yayınlanacak Olan Twit <small>

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





                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="netting/islem.php" method="POST">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yazan Kişi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $twitcek['twit_sahibi']; ?>" name="twit_sahibi" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twit <span class="required">*</span>
                        </label>
                              <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <textarea class="resizable_textarea form-control" name="twit_icerik" placeholder="Twitinizi Yazınız..."><?php echo $twitcek['twit_icerik']; ?> </textarea>
                                    </div>
                              </div>

                      </div>

                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="twitekle" class="btn btn-primary">TWİT AT</button>
                        </div>
                      </div>
                    </form>






                    <hr>






                       <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="netting/islem.php" method="POST">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yazan Kişi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $twitcek2['twit_sahibi']; ?>" name="twit_sahibi2" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twit <span class="required">*</span>
                        </label>
                              <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <textarea class="resizable_textarea form-control" name="twit_icerik2" placeholder="Twitinizi Yazınız..."><?php echo $twitcek2['twit_icerik']; ?> </textarea>
                                    </div>
                              </div>

                      </div>

                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="twitekle2" class="btn btn-primary">TWİT AT</button>
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