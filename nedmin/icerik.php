<?php 
include 'header.php';
include 'netting/baglan.php';

if (isset($_POST['aranan'])) 
{
  $aranan=$_POST['aranan'];
   $iceriksor=$db->prepare("select * from icerik where icerik_ad like '%$aranan%' order by icerik_durum DESC limit 25");
   $iceriksor->execute();
   $say=$iceriksor->rowCount();
}
else{
      $iceriksor=$db->prepare("select * from icerik order by icerik_durum DESC limit 25");
      $iceriksor->execute();
      $say=$iceriksor->rowCount();
}


?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>YÖNETİM PANELİ  <?php echo $_POST['aranan']; ?></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                <form action="" method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelime Giriniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama">Ara!</button>
                    </span>
                  </div>
                </form>

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
                    <h2>Blog Haber İşlemleri <?php echo "---".$say." Adet Kayıt Listelendi" ?><small>

                      <?php 
                      if($_GET['durum']=='ok')
                        { ?>
                          <b style="color: green;">işlem Başarılı..</b>

                       <?php } else if($_GET['durum']=='no'){ ?>

                          <b style="color: red;">İşlem Yapılamadı..</b>

                       <?php } ?>
                          
                        </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">Haber Resim (850X567)</th>
                            <th class="column-title">Haber Ad </th>
                             <th class="column-title">Haber Tarihi </th>
                            <th class="column-title">Haber Detay </th>
                            <th class="column-title">Haber Başlık </th>
                            <th class="column-title">Haber Durum </th>
                            <th style="width: 50px;" class="column-title"></th>
                            <th style="width: 50px;" class="column-title"></th>
                           
                           
                          </tr>
                        </thead>

                        <tbody>
                          <?php 
                               
                                

                                  while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC))
                                  { ?>

                                      <tr class="even pointer">
                                      <td class=" "><img  style="width: 250px;  height: 150px;" src="../<?php echo $icerikcek['icerik_resimyol']; ?>"></td>
                                      <td class=" "><?php echo $icerikcek['icerik_ad']; ?></td>
                                      <td class=" "><?php echo $icerikcek['icerik_zaman']; ?></td>
                                      <td class=" "><?php echo substr($icerikcek['icerik_detay'],0,50)."...";?></td>
                                      <td class=" "><?php echo $icerikcek['icerik_baslik']; ?></td>
                                      <td class=" "><?php 

                                        if ($icerikcek['icerik_durum']==1) {
                                         echo "Aktif";
                                        }
                                        else{

                                          echo "Pasif";
                                        }


                                       ?></td>
                                      <td class="">
                                              <a href="icerik-guncelle.php?icerik_id=<?php echo $icerikcek['icerik_id']; ?>">
                                              <button style="width: 80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"> Düzenle</i>
                                              </button>
                                              </a>
                                      </td>

                                      <td class="">
                                            <a href="netting/islem.php?iceriksil=ok&icerik_id=<?php echo $icerikcek['icerik_id']; ?>&icerik_resimyol=<?php echo $icerikcek['icerik_resimyol']; ?>">

                                            <button style="width: 80px;" class="btn btn-danger btn-xs"><i class="fa fa-pencil" aria-hidden="true"> SİL</i></button>
                                            </a>
                                      </td>
                                      </tr>

                                  <?php  } ?>
                          
                        </tbody>
                      </table>
                    </div>
              
            
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