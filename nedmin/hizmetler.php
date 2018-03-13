<?php 
include 'header.php';
include 'netting/baglan.php';

if (isset($_POST['aranan'])) 
{
  $aranan=$_POST['aranan'];
   $hizmetsor=$db->prepare("select * from hizmetler where hizmet_ad like '%$aranan%' order by  hizmet_tarih DESC limit 25");
   $hizmetsor->execute();
   $say=$hizmetsor->rowCount();
}
else{
      $hizmetsor=$db->prepare("select * from hizmetler order by hizmet_tarih DESC limit 25");
      $hizmetsor->execute();
      $say=$hizmetsor->rowCount();
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
                    <h2>hizmet işlemleri <?php echo "---".$say." Adet Kayıt Listelendi" ?><small>

                      <?php 
                      if($_GET['durum']=='ok')
                        { ?>
                          <b style="color: green;">İşlem Başarılı..</b>

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
                            
                            <th class="column-title">Hizmet Resim (2200X900)</th>
                            <th class="column-title">Hizmet Ad </th>
                            <th class="column-title">Hizmet Katagori </th>
                            <th class="column-title">Hizmet Başlık </th>
                            <th class="column-title">Hizmet Tarihi </th>
                            <th style="width: 80px;" class="column-title"></th>
                            <th style="width: 80px;" class="column-title"></th>
                           
                           
                          </tr>
                        </thead>

                        <tbody>
                          <?php 
                               
                                

                                  while($hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC))
                                  { ?>

                                      <tr class="even pointer">
                                      <td class=" "><img  style="width: 200px;  height: 150px;" src="../<?php echo $hizmetcek['hizmet_resimyol']; ?>"></td>
                                      <td class=" "><?php echo $hizmetcek['hizmet_ad']; ?></td>
                                      <td class=" "><?php echo $hizmetcek['hizmet_kategori']; ?></td>
                                      <td class=" "><?php echo $hizmetcek['hizmet_baslik']; ?></td>
                                      <td class=" "><?php echo $hizmetcek['hizmet_tarih']; ?></td>
                                      <td class=" ">
                                              <a href="hizmet-guncelle.php?hizmet_id=<?php echo $hizmetcek['hizmet_id']; ?>">
                                              <button style="width: 80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"> Düzenle</i>
                                              </button>
                                              </a>
                                      </td>

                                      <td class=" ">
                                            <a href="netting/islem.php?hizmetsil=ok&hizmet_id=<?php echo $hizmetcek['hizmet_id']; ?>&hizmet_resimyol=<?php echo $hizmetcek['hizmet_resimyol']; ?>">

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