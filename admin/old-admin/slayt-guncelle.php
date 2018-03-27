<?php

include "functions.php";
$dosyaYolu="img/";

if(empty($_FILES["slayt1"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM slider", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $slayt1Ad=$row['slayt1Resim'];
      }
  }
}

else {
$slayt1Kaynak=$_FILES["slayt1"]["tmp_name"]; // tempdeki adı
$slayt1Ad=$_FILES["slayt1"]["name"]; // dosya adı
$slayt1Kaydet=move_uploaded_file($slayt1Kaynak, $dosyaYolu."/".$slayt1Ad); // resmimizi klasöre kayıt ettiriyoruz.
}

if(empty($_FILES["slayt2"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM slider", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $slayt2Ad=$row['slayt2Resim'];
      }
  }
}

else {
$slayt2Kaynak=$_FILES["slayt2"]["tmp_name"]; // tempdeki adı
$slayt2Ad=$_FILES["slayt2"]["name"]; // dosya adı
$slayt2Kaydet=move_uploaded_file($slayt2Kaynak, $dosyaYolu."/".$slayt2Ad); // resmimizi klasöre kayıt ettiriyoruz.
}

if(empty($_FILES["slayt3"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM slider", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $slayt3Ad=$row['slayt3Resim'];
      }
  }
}

else {
$slayt3Kaynak=$_FILES["slayt3"]["tmp_name"]; // tempdeki adı
$slayt3Ad=$_FILES["slayt3"]["name"]; // dosya adı
$slayt3Kaydet=move_uploaded_file($slayt3Kaynak, $dosyaYolu."/".$slayt3Ad); // resmimizi klasöre kayıt ettiriyoruz.
}

$slayt1Yazi = $_POST['slayt1'];
$slayt2Yazi = $_POST['slayt2'];
$slayt3Yazi = $_POST['slayt3'];

$sonuc=$db->exec("UPDATE slider SET slayt1Resim='$slayt1Ad', slayt1Yazisi='$slayt1Yazi', slayt2Resim='$slayt2Ad', slayt2Yazisi='$slayt2Yazi', slayt3Resim='$slayt3Ad', slayt3Yazisi='$slayt3Yazi' WHERE id='1' ");

if($sonuc){
  header("Location:slider.php?sonuc=kaydedildi");
}
elseif (!isset($sonuc)) {

  header("Location:slider.php?sonuc=kayıt-basarisiz");
}
else 
{
    header("Location:slider.php?sonuc=gecersiz-islem");
}
$db =null;