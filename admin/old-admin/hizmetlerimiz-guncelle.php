<?php
include "functions.php";
$dosyaYolu="img/";

if(empty($_FILES["oneCikanResim"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM hizmetlerimiz", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $ad=$row['oneCikanResim'];
      }
  }
}

else {
$kaynak=$_FILES["oneCikanResim"]["tmp_name"]; // tempdeki adı
$ad=$_FILES["oneCikanResim"]["name"]; // dosya adı
$resimKaydet=move_uploaded_file($kaynak, $dosyaYolu."/".$ad); // resmimizi klasöre kayıt ettiriyoruz.
}

$bolumBasligi = $_POST['bolumBasligi'];
$bolumMesaji =$_POST['bolumMesaji'];

$hizmet1Icon=$_POST['icon1'];
$hizmet1Baslik =$_POST['hizmet1Baslik'];
$hizmet1Icerik=$_POST['hizmet1Icerik'];

$hizmet2Icon =$_POST['icon2'];
$hizmet2Baslik =$_POST['hizmet2Baslik'];
$hizmet2Icerik=$_POST['hizmet2Icerik'];

$hizmet3Icon=$_POST['hizmet3Icon'];
$hizmet3Baslik=$_POST['hizmet3Baslik'];
$hizmet3Icerik=$_POST['hizmet3Icerik'];

$hizmet4Icon=$_POST['hizmet4Icon'];
$hizmet4Baslik=$_POST['hizmet4Baslik'];
$hizmet4Icerik=$_POST['hizmet4Icerik'];

$sonuc=$db->exec("UPDATE hizmetlerimiz SET 
oneCikanResim='$ad',
bolumBasligi='$bolumBasligi', 
bolumMesaji='$bolumMesaji', 
hizmet1Icon='$hizmet1Icon',
hizmet1Baslik='$hizmet1Baslik',
hizmet1Icerik='$hizmet1Icerik',
hizmet2Icon='$hizmet2Icon' , 
hizmet2Baslik='$hizmet2Baslik',
hizmet2Icerik='$hizmet2Icerik',
hizmet3Icon='$hizmet3Icon',
hizmet3Baslik='$hizmet3Baslik',
hizmet3Icerik='$hizmet3Icerik',
hizmet4Icon='$hizmet4Icon',
hizmet4Baslik='$hizmet4Baslik',
hizmet4Icerik='$hizmet4Icerik'
WHERE id='1'");

if($sonuc){
  header("Location:hizmetlerimiz.php?sonuc=kaydedildi");
}
elseif (!isset($sonuc)) {

  header("Location:hizmetlerimiz.php?sonuc=kayıt-basarisiz");
}
else 
{
    header("Location:hizmetlerimiz.php?sonuc=gecersiz-islem");
}

$db =null;











