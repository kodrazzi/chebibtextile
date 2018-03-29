<?php
if($_POST){

  include "./config/config.php";
  $id=$_GET['id'];
  $dosyaYolu="./../assets/img/slides/"; // başta açtıgımız klasör adımız..
  
  if(empty($_FILES["profilFoto"])){
    header("Location:main.php?p=add-slider&sonuc=dosya-bos");
  }
  
  else {
    $ProfilFotoKaynak=$_FILES["slide"]["tmp_name"]; // tempdeki adı
    $ProfilFotoAd=$_FILES["slide"]["name"]; // dosya adı
    $ProfilFotoKaydet=move_uploaded_file($ProfilFotoKaydet, $dosyaYolu."/".$ProfilFotoAd); // resmimizi klasöre kayıt ettiriyoruz.
  }
  
  $slogan_1_tr =$_POST['slogan-1-tr'];
  $slogan_1_en =$_POST['slogan-1-en'];
  $slogan_2_tr =$_POST['slogan-2-tr'];
  $slogan_2_en =$_POST['slogan-2-en'];
  
  $slider_kayit = $db->prepare("INSERT INTO sliders SET
  slogan_1_tr = ?,
  slogan_1_en = ?,
  slogan_2_tr = ?,
  slogan_2_en = ?,
  slider_photo_name = ?,");
  
  $sonuc = $slider_kayit->execute(array($slogan_1_tr, $slogan_1_en, $slogan_2_tr, $slogan_2_en,$ProfilFotoAd));

  if($sonuc){
    header("Location:main.php?p=add-slider&sonuc=slider-kaydedildi");
  }
  elseif (!isset($sonuc)) {
  
    header("Location:main.php?p=add-slider&sonuc=kayit-basarisiz");
  }
  else 
  {
      header("Location:main.php?p=add-slider&sonuc=gecersiz-islem");
  }
  $db =null;
  
}