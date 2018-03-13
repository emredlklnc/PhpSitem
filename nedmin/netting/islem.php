<?php 
include 'baglan.php';
ob_start();
session_start();


if (isset($_POST['loggin'])) 
{
			 $kullanici_ad=$_POST['kullanici_ad'];
	 		 $kullanici_sifre=md5($_POST['kullanici_sifre']);

	
		if ($kullanici_ad && $kullanici_sifre) 
		{
				
				$kullanıcısor=$db->prepare("SELECT * from kullanici where kullanici_ad='$kullanici_ad' and kullanici_sifre='$kullanici_sifre'");
				$kullanıcısor->execute(array());
				
				$say=$kullanıcısor->rowCount();

			if ($say>0) 
			{
				$_SESSION["kul_ad"]=$kullanici_ad;
				header('Location:../index.php');
			}
			else
			{
				
				header('Location:../login.php?durum=no');
			}
		}
	
}






if (isset($_POST['genelayarkaydet'])) 
{

/*$icerikinputu=$_POST['ayar_siteurl'];//postla gelen içerik inputu namei
	$güncelle=$db->exec("UPDATE ayar SET ayar_siteurl='$icerikinputu' where ayar_id='0'");


	if ($güncelle) {
		echo "kayıt paşarılı";
	}
}*/
	
	
	$ayar_siteurl=$_POST['ayar_siteurl'];
	$ayar_title=$_POST['ayar_title'];
	$ayar_description=$_POST['ayar_description'];
	$ayar_keywords=$_POST['ayar_keywords'];
	$ayar_author=$_POST['ayar_author'];
	
	$genelayarkaydet=$db->prepare("UPDATE ayar SET ayar_siteurl='$ayar_siteurl',ayar_title='$ayar_title' ,ayar_description='$ayar_description',ayar_keywords='$ayar_keywords',ayar_author='$ayar_author' WHERE ayar_id=0");

	$genelayarguncelle=$genelayarkaydet->execute();

	if ($genelayarguncelle) 
	{
		header("Location:../genel-ayar.php?durum=ok");
	}
	else
	{
		header("Location:../genel-ayar.php?durum=no");
	}
}


if (isset($_POST['profilkaydet'])) 
{

	$kullanici_id=$_POST['kullanici_id'];
	$kullanici_ad=$_POST['kullanici_ad'];
	$kullanici_sifre=md5($_POST['kullanici_sifre']);
	
	$profkaydet=$db->prepare("UPDATE kullanici SET kullanici_ad='$kullanici_ad',kullanici_sifre='$kullanici_sifre' WHERE kullanici_id='$kullanici_id'");

	$profguncelle=$profkaydet->execute();

	if ($profguncelle) 
	{
		$_SESSION["kul_ad"]=$kullanici_ad;
		header("Location:../profil-duzenle.php?durum=ok");
	}
	else
	{
		header("Location:../profil-duzenle.php?durum=no");
	}
}





if (isset($_POST['iletisimayarkaydet'])) 
{

	$ayar_tel=$_POST['ayar_tel'];
	$ayar_gsm=$_POST['ayar_gsm'];
	$ayar_faks=$_POST['ayar_faks'];
	$ayar_mail=$_POST['ayar_mail'];
	$ayar_adres=$_POST['ayar_adres'];

	$ayar_ilce=$_POST['ayar_ilce'];
	$ayar_il=$_POST['ayar_il'];
	$ayar_mesai=$_POST['ayar_mesai'];
	
	$iletisimayarkaydet=$db->prepare("UPDATE ayar SET ayar_tel='$ayar_tel',ayar_gsm='$ayar_gsm' ,ayar_faks='$ayar_faks',ayar_mail='$ayar_mail',ayar_adres='$ayar_adres',ayar_ilce='$ayar_ilce',ayar_il='$ayar_il',ayar_mesai='$ayar_mesai' WHERE ayar_id=0");

	$iletisimayarguncelle=$iletisimayarkaydet->execute();

	if ($iletisimayarguncelle) 
	{
		header("Location:../iletisim-ayar.php?durum=ok");
	}
	else
	{
		header("Location:../iletisim-ayar.php?durum=no");
	}
}


if (isset($_POST['sosyalayarkaydet'])) 
{

	$ayar_twitter=$_POST['ayar_twitter'];
	$ayar_facebook=$_POST['ayar_facebook'];
	$ayar_google=$_POST['ayar_google'];
	$ayar_in=$_POST['ayar_in'];
	$ayar_copyad=$_POST['ayar_copyad'];

	$ayar_copylink=$_POST['ayar_copylink'];
	$ayar_youtube=$_POST['ayar_youtube'];
	
	$sosyalayarkaydet=$db->prepare("UPDATE ayar SET ayar_twitter='$ayar_twitter',ayar_facebook='$ayar_facebook' ,ayar_google='$ayar_google',ayar_youtube='$ayar_youtube',ayar_in='$ayar_in',ayar_copyad='$ayar_copyad',ayar_copylink='$ayar_copylink' WHERE ayar_id=0");

	$sosyalayarguncelle=$sosyalayarkaydet->execute();

	if ($sosyalayarguncelle) 
	{
		header("Location:../sosyal-ayar.php?durum=ok");
	}
	else
	{
		header("Location:../sosyal-ayar.php?durum=no");
	}
}


if (isset($_POST['apiayarkaydet'])) 
{

	$ayar_recaptcha=$_POST['ayar_recaptcha'];
	$ayar_goooglemap=$_POST['ayar_goooglemap'];
	$ayar_analystic=$_POST['ayar_analystic'];
	
	$apiayarkaydet=$db->prepare("UPDATE ayar SET ayar_recaptcha='$ayar_recaptcha',ayar_goooglemap='$ayar_goooglemap' ,ayar_analystic='$ayar_analystic' WHERE ayar_id=0");

	$sapiayarguncelle=$apiayarkaydet->execute();

	if ($sapiayarguncelle) 
	{
		header("Location:../api-ayar.php?durum=ok");
	}
	else
	{
		header("Location:../api-ayar.php?durum=no");
	}
}

if (isset($_POST['mailayarkaydet'])) 
{

	$ayar_smtphost=$_POST['ayar_smtphost'];
	$ayar_smtpuser=$_POST['ayar_smtpuser'];
	$ayar_smtppassword=$_POST['ayar_smtppassword'];
	$ayar_smtpport=$_POST['ayar_smtpport'];
	
	$mailayarkaydet=$db->prepare("UPDATE ayar SET ayar_smtphost='$ayar_smtphost',ayar_smtpuser='$ayar_smtpuser' ,ayar_smtppassword='$ayar_smtppassword',ayar_smtpport='$ayar_smtpport' WHERE ayar_id=0");

	$mailayarguncelle=$mailayarkaydet->execute();

	if ($mailayarguncelle) 
	{
		header("Location:../mail-ayar.php?durum=ok");
	}
	else
	{
		header("Location:../mail-ayar.php?durum=no");
	}
}


if (isset($_POST['hakguncelle'])) 
{

		 $eskiresim=$_POST['eskiresimyol'];

	if ($_FILES['hakkimizda_resim']['size']>0) 
	{
				
				unlink("../../$eskiresim");
		
				$uploads_dir="../../upload/about";
				@$tmp_name=$_FILES['hakkimizda_resim']["tmp_name"];
				@$name=$_FILES['hakkimizda_resim']["name"];
				$benzersizsayi1=rand(20000,32000);
				$benzersizsayi2=rand(20000,32000);
				$benzersizsayi3=rand(20000,32000);
				$benzersizsayi4=rand(20000,32000);

				$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;


				$uzantı=substr($name,-3);
				$refimgyol=substr($uploads_dir,6)."/".$benzersizad;
				@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");



					$hakkimizda_baslik=$_POST['hakkimizda_baslik'];
					$hakkimizda_altbaslik=$_POST['hakkimizda_altbaslik'];
					
					$hakkimizda_icerik=$_POST['hakkimizda_icerik'];
					$hakkimizda_vizyon=$_POST['hakkimizda_vizyon'];
					$hakkimizda_misyon=$_POST['hakkimizda_misyon'];
								
				
				$mailayarkaydet=$db->prepare("UPDATE hakkimizda SET hakkimizda_baslik='$hakkimizda_baslik',hakkimizda_altbaslik='$hakkimizda_altbaslik' ,hakkimizda_resim='$refimgyol',hakkimizda_icerik='$hakkimizda_icerik',hakkimizda_vizyon='$hakkimizda_vizyon',hakkimizda_misyon='$hakkimizda_misyon' WHERE hakkimizda_id=0");
				$mailayarguncelle=$mailayarkaydet->execute();


					if ($mailayarguncelle) 
					{
						header("Location:../hakkimizda.php?durum=ok");
					}
					else
					{
						header("Location:../hakkimizda.php?durum=no");
					}


	}
	else
	{
			
					$hakkimizda_baslik=$_POST['hakkimizda_baslik'];
					$hakkimizda_altbaslik=$_POST['hakkimizda_altbaslik'];
					
					$hakkimizda_icerik=$_POST['hakkimizda_icerik'];
					$hakkimizda_vizyon=$_POST['hakkimizda_vizyon'];
					$hakkimizda_misyon=$_POST['hakkimizda_misyon'];
								
				
				$mailayarkaydet=$db->prepare("UPDATE hakkimizda SET hakkimizda_baslik='$hakkimizda_baslik',hakkimizda_altbaslik='$hakkimizda_altbaslik' ,hakkimizda_resim='$eskiresimyol',hakkimizda_icerik='$hakkimizda_icerik',hakkimizda_vizyon='$hakkimizda_vizyon',hakkimizda_misyon='$hakkimizda_misyon' WHERE hakkimizda_id=0");
				$mailayarguncelle=$mailayarkaydet->execute();


					if ($mailayarguncelle) 
					{
						header("Location:../hakkimizda.php?durum=ok");
					}
					else
					{
						header("Location:../hakkimizda.php?durum=no");
					}

	}
}














if (isset($_POST['videoguncelle'])) 
{

	$video_baslik=$_POST['video_baslik'];
	$video_icerik=$_POST['video_icerik'];
	$video_yazı=$_POST['video_yazı'];
	
	$videokaydet=$db->prepare("UPDATE video SET video_baslik='$video_baslik',video_icerik='$video_icerik' ,video_yazı='$video_yazı' WHERE video_id=0");

	$guncellevideo=$videokaydet->execute();

	if ($guncellevideo) 
	{
		header("Location:../videocekme.php?durum=ok");
	}
	else
	{
		header("Location:../videocekme.php?durum=no");
	}
}



if (isset($_POST['twitekle'])) 
{

	$twit_sahibi=$_POST['twit_sahibi'];
	$twit_icerik=$_POST['twit_icerik'];
	
	
	$twitatguncelle=$db->prepare("UPDATE twit SET twit_sahibi='$twit_sahibi',twit_icerik='$twit_icerik' WHERE twit_id=1");

	$twitat=$twitatguncelle->execute();

	if ($twitat) 
	{
		header("Location:../twit.php?durum=ok");
	}
	else
	{
		header("Location:../twit.php?durum=no");
	}
}

if (isset($_POST['twitekle2'])) 
{

	$twit_sahibi2=$_POST['twit_sahibi2'];
	$twit_icerik2=$_POST['twit_icerik2'];
	
	
	$twitatguncelle2=$db->prepare("UPDATE twit SET twit_sahibi='$twit_sahibi2',twit_icerik='$twit_icerik2' WHERE twit_id=2");

	$twitat2=$twitatguncelle2->execute();

	if ($twitat2) 
	{
		header("Location:../twit.php?durum=ok");
	}
	else
	{
		header("Location:../twit.php?durum=no");
	}
}




if (isset($_POST['sliderkaydet'])) 
{

	$uploads_dir="../../upload/slider";
	@$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
	@$name=$_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad;


	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");



	$slider_ad=$_POST['slider_ad'];
	$slider_link=$_POST['slider_link'];
	$slider_sira=$_POST['slider_sira'];
	$slider_durum=$_POST['slider_durum'];
	
	$sliderekle=$db->prepare("INSERT INTO slider SET slider_ad='$slider_ad',slider_link='$slider_link' ,slider_sira='$slider_sira',slider_durum='$slider_durum',slider_resimyol='$refimgyol'");

	$insert=$sliderekle->execute();

	if ($insert) 
	{
		header("Location:../slider-duzenle.php?durum=ok");
	}
	else
	{
		header("Location:../slider-duzenle.php?durum=no");
	}

}


if (isset($_POST['hizmetkaydet'])) 
{

	$uploads_dir="../../upload/hizmetler";
	@$tmp_name=$_FILES['hizmet_resimyol']["tmp_name"];
	@$name=$_FILES['hizmet_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad;


	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");

		$saat=$_POST['hizmet_saat'];
		$tarih=$_POST['hizmet_trh'];
		$hizmet_zaman=$tarih." ".$saat;

	$hizmet_ad=$_POST['hizmet_ad'];
	$hizmet_baslik=$_POST['hizmet_baslik'];
	$hizmet_kategori=$_POST['hizmet_kategori'];
	
	
	$hizmetekle=$db->prepare("INSERT INTO hizmetler SET hizmet_ad='$hizmet_ad',hizmet_baslik='$hizmet_baslik',hizmet_kategori='$hizmet_kategori',hizmet_tarih='$hizmet_zaman',hizmet_resimyol='$refimgyol'");

	$insert=$hizmetekle->execute();

	if ($insert) 
	{
		header("Location:../hizmet-ekle.php?durum=ok");
	}
	else
	{
		header("Location:../hizmet-ekle.php?durum=no");
	}

}




if (isset($_POST['galvideokaydet'])) 
{

	

	$saat=$_POST['resim_saat'];
	$tarih=$_POST['resim_trh'];
	$galvideo_tarih=$tarih." ".$saat;

	$galvideo_kategori=$_POST['galvideo_kategori'];
	$galvideo_embed=$_POST['galvideo_embed'];
	$galvideo_ad=$_POST['galvideo_ad'];
	$galvideo_baslik=$_POST['galvideo_baslik'];
	
	
	
	$galvideoekle=$db->prepare("INSERT INTO galerivideo SET galvideo_kategori='$galvideo_kategori',galvideo_embed='$galvideo_embed',galvideo_ad='$galvideo_ad',galvideo_baslik='$galvideo_baslik',galvideo_tarih='$galvideo_tarih'");

	$insert=$galvideoekle->execute();

	if ($insert) 
	{
		header("Location:../video-ekle.php?durum=ok");
	}
	else
	{
		header("Location:../video-ekle.php?durum=no");
	}

}











if (isset($_POST['resimkaydet'])) 
{

	$uploads_dir="../../upload/resimgaleri";
	@$tmp_name=$_FILES['resim_resimyol']["tmp_name"];
	@$name=$_FILES['resim_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad;


	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");

		$saat=$_POST['resim_saat'];
		$tarih=$_POST['resim_trh'];
		$resim_zaman=$tarih." ".$saat;

	$resim_ad=$_POST['resim_ad'];
	$resim_baslik=$_POST['resim_baslik'];
	$resim_kategori=$_POST['resim_kategori'];
	
	
	$resimekle=$db->prepare("INSERT INTO galeriresim SET resim_ad='$resim_ad',resim_baslik='$resim_baslik',resim_kategori='$resim_kategori',resim_tarih='$resim_zaman',resim_resimyol='$refimgyol'");

	$insert=$resimekle->execute();

	if ($insert) 
	{
		header("Location:../resim-ekle.php?durum=ok");
	}
	else
	{
		header("Location:../resim-ekle.php?durum=no");
	}

}
if ($_GET['slidersil']=="ok") 
{


	$slider_id=$_GET['slider_id'];
	$sil=$db->prepare("DELETE FROM slider WHERE slider_id='$slider_id'");
	$kontrol=$sil->execute();
	if ($kontrol) 
	{
		$resim_sil=$_GET['slider_resimyol'];
		unlink("../../$resim_sil");

		header('Location:../slider-duzenle.php?durum=ok');
	}
	else{
		header('Location:../slider-duzenle.php?durum=no');

	}
}

if ($_GET['hizmetsil']=="ok") 
{


	$hizmet_id=$_GET['hizmet_id'];
	$sil=$db->prepare("DELETE FROM hizmetler WHERE hizmet_id='$hizmet_id'");
	$kontrol=$sil->execute();
	if ($kontrol) 
	{
		$resim_sil=$_GET['hizmet_resimyol'];
		unlink("../../$resim_sil");

		header('Location:../hizmetler.php?durum=ok');
	}
	else{
		header('Location:../hizmetler.php?durum=no');

	}
}


if ($_GET['galvideosil']=="ok") 
{


	$galvideo_id=$_GET['galvideo_id'];
	$galvidsil=$db->prepare("DELETE FROM galerivideo WHERE galvideo_id='$galvideo_id'");
	$kontrol=$galvidsil->execute();
	if ($kontrol) 
	{
		header('Location:../videogalerisi.php?durum=ok');
	}
	else{
		header('Location:../videogalerisi.php?durum=no');

	}
}



if ($_GET['resimsil']=="ok") 
{


	$resim_id=$_GET['resim_id'];
	$sil=$db->prepare("DELETE FROM galeriresim WHERE resim_id='$resim_id'");
	$kontrol=$sil->execute();
	if ($kontrol) 
	{
		$resim_sil=$_GET['resim_resimyol'];
		unlink("../../$resim_sil");

		header('Location:../resimgalerisi.php?durum=ok');
	}
	else{
		header('Location:../resimgalerisi.php?durum=no');

	}
}

if (isset($_POST['sliderguncelle'])) 
{

	$eskiresim=$_POST['eskiresimyol'];
	if ($_FILES['slider_resimyol']['size']>0) 
	{
				
				unlink("../../$eskiresim");
		
				$uploads_dir="../../upload/slider";
				@$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
				@$name=$_FILES['slider_resimyol']["name"];
				$benzersizsayi1=rand(20000,32000);
				$benzersizsayi2=rand(20000,32000);
				$benzersizsayi3=rand(20000,32000);
				$benzersizsayi4=rand(20000,32000);

				$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
				$refimgyol=substr($uploads_dir,6)."/".$benzersizad;


				@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");


				$slider_id=$_POST['slider_id'];
				$slider_ad=$_POST['slider_ad'];
				$slider_link=$_POST['slider_link'];
				$slider_sira=$_POST['slider_sira'];
				$slider_durum=$_POST['slider_durum'];
				
				$sliderguncelle=$db->prepare("UPDATE slider SET slider_ad='$slider_ad',slider_link='$slider_link' ,slider_sira='$slider_sira' ,slider_durum='$slider_durum',slider_resimyol='$refimgyol' WHERE slider_id='$slider_id'");

				$guncelle=$sliderguncelle->execute();


				if ($guncelle) 
				{
					header("Location:../slider-guncelle.php?slider_id=$slider_id&durum=ok");
				}
				else
				{
					header("Location:../slider-guncelle.php?slider_id=$slider_id&durum=no");
				}


	}
	else
	{
			
				$slider_id=$_POST['slider_id'];
				$slider_ad=$_POST['slider_ad'];
				$slider_link=$_POST['slider_link'];
				$slider_sira=$_POST['slider_sira'];
				$slider_durum=$_POST['slider_durum'];
				
				$sliderguncelle=$db->prepare("UPDATE slider SET slider_ad='$slider_ad',slider_link='$slider_link' ,slider_sira='$slider_sira' ,slider_durum='$slider_durum',slider_resimyol='$eskiresim' WHERE slider_id='$slider_id'");

				$guncelle=$sliderguncelle->execute();


				if ($guncelle) 
				{
					header("Location:../slider-guncelle.php?slider_id=$slider_id&durum=ok");
				}
				else
				{
					header("Location:../slider-guncelle.php?slider_id=$slider_id&durum=no");
				}

	}
}

if (isset($_POST['logoguncelle'])) 
{

	$eskiresim=$_POST['eskiresimyol'];
	if ($_FILES['ayar_logo']['size']>0) 
	{
				
				unlink("../../$eskiresim");
		
				$uploads_dir="../../upload";
				@$tmp_name=$_FILES['ayar_logo']["tmp_name"];
				@$name=$_FILES['ayar_logo']["name"];
				$benzersizsayi1=rand(20000,32000);
				$benzersizsayi2=rand(20000,32000);
				$benzersizsayi3=rand(20000,32000);
				$benzersizsayi4=rand(20000,32000);

				$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
				$refimgyol=substr($uploads_dir,6)."/".$benzersizad;

				@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");



				$ayar_logoisim=$_POST['ayar_logoisim'];
				
				
				$logoguncelle=$db->prepare("UPDATE ayar SET ayar_logoisim='$ayar_logoisim',ayar_logo='$refimgyol' WHERE ayar_id=0");
				$guncelle=$logoguncelle->execute();


				if ($guncelle) 
				{
					header("Location:../logo-guncelle.php?ayar_id=0&durum=ok");
				}
				else
				{
					header("Location:../logo-guncelle.php?ayar_id=0&durum=no");
				}


	}
	else
	{
			
				$ayar_logoisim=$_POST['ayar_logoisim'];
				
				
				$logoguncelle=$db->prepare("UPDATE ayar SET ayar_logoisim='$ayar_logoisim',ayar_logo='$eskiresim' WHERE ayar_id=0");
				$guncelle=$logoguncelle->execute();


				if ($guncelle) 
				{
					header("Location:../logo-guncelle.php?ayar_id=0&durum=ok");
				}
				else
				{
					header("Location:../logo-guncelle.php?ayar_id=0&durum=no");
				}

	}
}





if (isset($_POST['icerikguncelle'])) 
{

	$eskiresim=$_POST['eskiresimyol'];
	if ($_FILES['icerik_resimyol']['size']>0) 
	{
				
				unlink("../../$eskiresim");
		
				$uploads_dir="../../upload/blog";
				@$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
				@$name=$_FILES['icerik_resimyol']["name"];
				$benzersizsayi1=rand(20000,32000);
				$benzersizsayi2=rand(20000,32000);
				$benzersizsayi3=rand(20000,32000);
				$benzersizsayi4=rand(20000,32000);

				$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
				$refimgyol=substr($uploads_dir,6)."/".$benzersizad;


				@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");

				$saat=$_POST['icerik_saat'];
				$tarih=$_POST['icerik_tarih'];
				$icerik_zaman=$tarih." ".$saat;

				$icerik_id=$_POST['icerik_id'];
				$icerik_ad=$_POST['icerik_ad'];
				$icerik_baslik=$_POST['icerik_baslik'];
				$icerik_keyword=$_POST['icerik_keyword'];
				$icerik_detay=$_POST['icerik_detay'];
				$icerik_durum=$_POST['icerik_durum'];
				
				$icerikguncelle=$db->prepare("UPDATE icerik SET icerik_ad='$icerik_ad',icerik_baslik='$icerik_baslik' ,icerik_detay='$icerik_detay' ,icerik_durum='$icerik_durum',icerik_keyword='$icerik_keyword',icerik_zaman='$icerik_zaman',icerik_resimyol='$refimgyol' WHERE icerik_id='$icerik_id'");

				$guncelle=$icerikguncelle->execute();


				if ($guncelle) 
				{
					header("Location:../icerik-guncelle.php?icerik_id=$icerik_id&durum=ok");
				}
				else
				{
					header("Location:../icerik-guncelle.php?icerik_id=$icerik_id&durum=no");
				}


	}
	else
	{
				$saat=$_POST['icerik_saat'];
				$tarih=$_POST['icerik_tarih'];
				$icerik_zaman=$tarih." ".$saat;
			
				$icerik_id=$_POST['icerik_id'];
				$icerik_ad=$_POST['icerik_ad'];
				$icerik_baslik=$_POST['icerik_baslik'];
				$icerik_keyword=$_POST['icerik_keyword'];
				$icerik_detay=$_POST['icerik_detay'];
				$icerik_durum=$_POST['icerik_durum'];
				
				$icerikguncelle=$db->prepare("UPDATE icerik SET icerik_ad='$icerik_ad',icerik_baslik='$icerik_baslik' ,icerik_detay='$icerik_detay' ,icerik_durum='$icerik_durum',icerik_keyword='$icerik_keyword',icerik_zaman='$icerik_zaman',icerik_resimyol='$eskiresim' WHERE icerik_id='$icerik_id'");

				$guncelle=$icerikguncelle->execute();


				if ($guncelle) 
				{
					header("Location:../icerik-guncelle.php?icerik_id=$icerik_id&durum=ok");
				}
				else
				{
					header("Location:../icerik-guncelle.php?icerik_id=$icerik_id&durum=no");
				}

	}
}



if (isset($_POST['hizmetguncelle'])) 
{
	 
	$eskiresim=$_POST['eskiresimyol'];
	if ($_FILES['hizmet_resimyol']['size']>0) 
	{
				
				unlink("../../$eskiresim");
		
				$uploads_dir="../../upload/hizmetler";
				@$tmp_name=$_FILES['hizmet_resimyol']["tmp_name"];
				@$name=$_FILES['hizmet_resimyol']["name"];
				$benzersizsayi1=rand(20000,32000);
				$benzersizsayi2=rand(20000,32000);
				$benzersizsayi3=rand(20000,32000);
				$benzersizsayi4=rand(20000,32000);

				$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
				$refimgyol=substr($uploads_dir,6)."/".$benzersizad;


				@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");

				$saat=$_POST['hizmet_saat'];
				$tarih=$_POST['hizmet_trh'];
				$hizmet_tarih=$tarih." ".$saat;

				$hizmet_id=$_POST['hizmet_id'];
				$hizmet_ad=$_POST['hizmet_ad'];
				$hizmet_baslik=$_POST['hizmet_baslik'];
				$hizmet_kategori=$_POST['hizmet_kategori'];
				
				
				$guncel=$db->prepare("UPDATE hizmetler SET hizmet_ad='$hizmet_ad',hizmet_baslik='$hizmet_baslik',hizmet_kategori='$hizmet_kategori',hizmet_tarih='$hizmet_tarih',hizmet_resimyol='$refimgyol' WHERE hizmet_id='$hizmet_id'");

				$guncelle=$guncel->execute();


				if ($guncelle) 
				{
					header("Location:../hizmet-guncelle.php?hizmet_id=$hizmet_id&durum=ok");
				}
				else
				{
					header("Location:../hizmet-guncelle.php?hizmet_id=$hizmet_id&durum=no");
				}


	}
	else
	{
				$saat=$_POST['hizmet_saat'];
				$tarih=$_POST['hizmet_trh'];
				$hizmet_tarih=$tarih." ".$saat;

				$hizmet_id=$_POST['hizmet_id'];
				$hizmet_ad=$_POST['hizmet_ad'];
				$hizmet_baslik=$_POST['hizmet_baslik'];
				$hizmet_kategori=$_POST['hizmet_kategori'];
				
				
				$guncel=$db->prepare("UPDATE hizmetler SET hizmet_ad='$hizmet_ad',hizmet_baslik='$hizmet_baslik',hizmet_kategori='$hizmet_kategori',hizmet_tarih='$hizmet_tarih',hizmet_resimyol='$eskiresim' WHERE hizmet_id='$hizmet_id'");

				$guncelle=$guncel->execute();


				if ($guncelle) 
				{
					header("Location:../hizmet-guncelle.php?hizmet_id=$hizmet_id&durum=ok");
				}
				else
				{
					header("Location:../hizmet-guncelle.php?hizmet_id=$hizmet_id&durum=no");
				}

	}
}




if (isset($_POST['galvideoguncelle'])) 
{
	 

	$saat=$_POST['galvideo_saat'];
	$tarih=$_POST['galvideo_trh'];
	$galvideo_tarih=$tarih." ".$saat;


	$galvideo_id=$_POST['galvideo_id'];
	$galvideo_kategori=$_POST['galvideo_kategori'];
	$galvideo_embed=$_POST['galvideo_embed'];
	$galvideo_ad=$_POST['galvideo_ad'];
	$galvideo_baslik=$_POST['galvideo_baslik'];
				
				
				$galvidguncel=$db->prepare("UPDATE galerivideo SET galvideo_kategori='$galvideo_kategori',galvideo_embed='$galvideo_embed',galvideo_ad='$galvideo_ad',galvideo_baslik='$galvideo_baslik',galvideo_tarih='$galvideo_tarih' WHERE galvideo_id='$galvideo_id'");

				$guncelle=$galvidguncel->execute();


				if ($guncelle) 
				{
					header("Location:../video-guncelle.php?galvideo_id=$galvideo_id&durum=ok");
				}
				else
				{
					header("Location:../video-guncelle.php?galvideo_id=$galvideo_id&durum=no");
				}

}








if (isset($_POST['resimguncelle'])) 
{
	 
	$eskiresim=$_POST['eskiresimyol'];
	if ($_FILES['resim_resimyol']['size']>0) 
	{
				
				unlink("../../$eskiresim");
		
				$uploads_dir="../../upload/resimgaleri";
				@$tmp_name=$_FILES['resim_resimyol']["tmp_name"];
				@$name=$_FILES['resim_resimyol']["name"];
				$benzersizsayi1=rand(20000,32000);
				$benzersizsayi2=rand(20000,32000);
				$benzersizsayi3=rand(20000,32000);
				$benzersizsayi4=rand(20000,32000);

				$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
				$refimgyol=substr($uploads_dir,6)."/".$benzersizad;


				@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");

				$saat=$_POST['resim_saat'];
				$tarih=$_POST['resim_trh'];
				$resim_tarih=$tarih." ".$saat;

				$resim_id=$_POST['resim_id'];
				$resim_ad=$_POST['resim_ad'];
				$resim_baslik=$_POST['resim_baslik'];
				$resim_kategori=$_POST['resim_kategori'];
				
				
				$guncel=$db->prepare("UPDATE galeriresim SET resim_ad='$resim_ad',resim_baslik='$resim_baslik',resim_kategori='$resim_kategori',resim_tarih='$resim_tarih',resim_resimyol='$refimgyol' WHERE resim_id='$resim_id'");

				$guncelle=$guncel->execute();


				if ($guncelle) 
				{
					header("Location:../resim-guncelle.php?resim_id=$resim_id&durum=ok");
				}
				else
				{
					header("Location:../resim-guncelle.php?resim_id=$resim_id&durum=no");
				}


	}
	else
	{

				$saat=$_POST['resim_saat'];
				$tarih=$_POST['resim_trh'];
				$resim_tarih=$tarih." ".$saat;

				$resim_id=$_POST['resim_id'];
				$resim_ad=$_POST['resim_ad'];
				$resim_baslik=$_POST['resim_baslik'];
				$resim_kategori=$_POST['resim_kategori'];
				
				
				$guncel=$db->prepare("UPDATE galeriresim SET resim_ad='$resim_ad',resim_baslik='$resim_baslik',resim_kategori='$resim_kategori',resim_tarih='$resim_tarih',resim_resimyol='$eskiresim' WHERE resim_id='$resim_id'");

				$guncelle=$guncel->execute();


				if ($guncelle) 
				{
					header("Location:../resim-guncelle.php?resim_id=$resim_id&durum=ok");
				}
				else
				{
					header("Location:../resim-guncelle.php?resim_id=$resim_id&durum=no");
				}

	}
}











if (isset($_POST['icerikkaydet'])) 
{

				$uploads_dir="../../upload/blog";
				@$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
				@$name=$_FILES['icerik_resimyol']["name"];
				$benzersizsayi1=rand(20000,32000);
				$benzersizsayi2=rand(20000,32000);
				$benzersizsayi3=rand(20000,32000);
				$benzersizsayi4=rand(20000,32000);

				$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
				$refimgyol=substr($uploads_dir,6)."/".$benzersizad;


				@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad");


				$saat=$_POST['icerik_saat'];
				$tarih=$_POST['icerik_tarih'];
				$icerik_zaman=$tarih." ".$saat;

				$icerik_ad=$_POST['icerik_ad'];
				$icerik_baslik=$_POST['icerik_baslik'];
				$icerik_keyword=$_POST['icerik_keyword'];
				$icerik_detay=$_POST['icerik_detay'];
				$icerik_durum=$_POST['icerik_durum'];
				
				$icerikekle=$db->prepare("INSERT INTO icerik SET icerik_ad='$icerik_ad',icerik_baslik='$icerik_baslik' ,icerik_detay='$icerik_detay' ,icerik_durum='$icerik_durum',icerik_keyword='$icerik_keyword',icerik_zaman='$icerik_zaman',icerik_resimyol='$refimgyol'");

				$insert=$icerikekle->execute();

				if ($insert) 
				{
					header("Location:../icerik.php?durum=ok");
				}
				else
				{
					header("Location:../icerik.php?durum=no");
				}

}



if ($_GET['iceriksil']=="ok") 
{


	$icerik_id=$_GET['icerik_id'];
	$sil=$db->prepare("DELETE FROM icerik WHERE icerik_id='$icerik_id'");
	$kontrol=$sil->execute();
	if ($kontrol) 
	{
		$resim_sil=$_GET['icerik_resimyol'];
		unlink("../../$resim_sil");

		header('Location:../icerik.php?durum=ok');
	}
	else{
		header('Location:../icerik.php?durum=no');

	}
}




if (isset($_POST['serviskaydet'])) 
{


	$servis_baslik=$_POST['servis_baslik'];
	$servis_icerik=$_POST['servis_icerik'];
	$servis_icon=$_POST['servis_icon'];
	
	
	$servisekle=$db->prepare("INSERT INTO servisler SET servis_baslik='$servis_baslik',servis_icerik='$servis_icerik' ,servis_icon='$servis_icon'");

	$insert=$servisekle->execute();

	if ($insert) 
	{
		header("Location:../servisler-ekle.php?durum=ok");
	}
	else
	{
		header("Location:../servisler-ekle.php?durum=no");
	}

}
if (isset($_POST['servisguncelle'])) 
{

	$servis_id=$_POST['servis_id'];
	$servis_baslik=$_POST['servis_baslik'];
	$servis_icerik=$_POST['servis_icerik'];
	$servis_icon=$_POST['servis_icon'];
	
	
	$srvsguncelle=$db->prepare("UPDATE servisler SET servis_baslik='$servis_baslik',servis_icerik='$servis_icerik',servis_icon='$servis_icon' WHERE servis_id='$servis_id'");

	$guncelle=$srvsguncelle->execute();

	if ($guncelle) 
	{
		
		header("Location:../servisler-duzenle.php?servis_id=$servis_id&durum=ok");
	}
	else
	{
		header("Location:../servisler-duzenle.php?servis_id=$servis_id&durum=no");
	}

}


if ($_GET['servissil']=="ok") 
{

	$servis_id=$_GET['servis_id'];
	$sil=$db->prepare("DELETE FROM servisler WHERE servis_id='$servis_id'");
	$kontrol=$sil->execute();
	if ($kontrol) 
	{
		header('Location:../servisler.php?durum=ok');
	}
	else{
		header('Location:../servisler.php?durum=no');

	}
}

 ?>