<?php 
include "functions.php";
$dosyaYolu="img/"; // başta açtıgımız klasör adımız..

$galeriBolumBasligi=$_POST['galeriBolumBasligi'];
$galeriBolumAciklamasi =$_POST['galeriBolumAciklamasi'];

// Galeri 1 resmini sunucuya yükler
if(empty($_FILES["galeri1Resim"]["error"] != "4")){
    $baglan=$db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);
    if ( $baglan->rowCount()) {
        foreach( $baglan as $row) {
            $galeri1ResimAd=$row['galeri1Resim'];
        }
    }
}

else {
    $galeri1ResimKaynak=$_FILES["galeri1Resim"]["tmp_name"]; // tempdeki adı
    $galeri1ResimAd=$_FILES["galeri1Resim"]["name"]; // dosya adı
    $galeri1ResimKaydet=move_uploaded_file($galeri1ResimKaynak, $dosyaYolu."/".$galeri1ResimAd); // resmimizi klasöre kayıt ettiriyoruz.
}

$galeri1CalismaAdi =$_POST['galeri1CalismaAdi'];

// Galeri 2 resmini sunucuya yükler
if(empty($_FILES["galeri2Resim"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $galeri2ResimAd=$row['galeri2Resim'];
      }
  }
}

else {
  $galeri2ResimKaynak=$_FILES["galeri2Resim"]["tmp_name"]; // tempdeki adı
  $galeri2ResimAd=$_FILES["galeri2Resim"]["name"]; // dosya adı
  $galeri2ResimKaydet=move_uploaded_file($galeri2ResimKaynak, $dosyaYolu."/".$galeri2ResimAd); // resmimizi klasöre kayıt ettiriyoruz.
}

$galeri2CalismaAdi =$_POST['galeri2CalismaAdi'];

// Galeri 3 resmini sunucuya yükler
if(empty($_FILES["galeri3Resim"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $galeri3ResimAd=$row['galeri3Resim'];
      }
  }
}

else {
  $galeri3ResimKaynak=$_FILES["galeri3Resim"]["tmp_name"]; // tempdeki adı
  $galeri3ResimAd=$_FILES["galeri3Resim"]["name"]; // dosya adı
  $galeri3ResimKaydet=move_uploaded_file($galeri3ResimKaynak, $dosyaYolu."/".$galeri3ResimAd); // resmimizi klasöre kayıt ettiriyoruz.
}

$galeri3CalismaAdi =$_POST['galeri3CalismaAdi'];

// Galeri 4 resmini sunucuya yükler
if(empty($_FILES["galeri4Resim"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $galeri4ResimAd=$row['galeri4Resim'];
      }
  }
}

else {
  $galeri4ResimKaynak=$_FILES["galeri4Resim"]["tmp_name"]; // tempdeki adı
  $galeri4ResimAd=$_FILES["galeri4Resim"]["name"]; // dosya adı
  $galeri4ResimKaydet=move_uploaded_file($galeri4ResimKaynak, $dosyaYolu."/".$galeri4ResimAd); // resmimizi klasöre kayıt ettiriyoruz.
}


$galeri4CalismaAdi =$_POST['galeri4CalismaAdi'];

// Galeri 5 resmini sunucuya yükler
if(empty($_FILES["galeri5Resim"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $galeri5ResimAd=$row['galeri5Resim'];
      }
  }
}

else {
  $galeri5ResimKaynak=$_FILES["galeri5Resim"]["tmp_name"]; // tempdeki adı
  $galeri5ResimAd=$_FILES["galeri5Resim"]["name"]; // dosya adı
  $galeri5ResimKaydet=move_uploaded_file($galeri5ResimKaynak, $dosyaYolu."/".$galeri5ResimAd); // resmimizi klasöre kayıt ettiriyoruz.
}

$galeri5CalismaAdi =$_POST['galeri5CalismaAdi'];

// Galeri 6 resmini sunucuya yükler
if(empty($_FILES["galeri6Resim"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $galeri6ResimAd=$row['galeri6Resim'];
      }
  }
}

else {
  $galeri6ResimKaynak=$_FILES["galeri6Resim"]["tmp_name"]; // tempdeki adı
  $galeri6ResimAd=$_FILES["galeri6Resim"]["name"]; // dosya adı
  $galeri6ResimKaydet=move_uploaded_file($galeri6ResimKaynak, $dosyaYolu."/".$galeri6ResimAd); // resmimizi klasöre kayıt ettiriyoruz.
}

$galeri6CalismaAdi =$_POST['galeri6CalismaAdi'];

// Galeri 7 resmini sunucuya yükler
if(empty($_FILES["galeri7Resim"]["error"] != "4")){
    $baglan=$db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);
    if ( $baglan->rowCount()) {
        foreach( $baglan as $row) {
            $galeri7ResimAd=$row['galeri7Resim'];
        }
    }
  }
  
  else {
    $galeri7ResimKaynak=$_FILES["galeri7Resim"]["tmp_name"]; // tempdeki adı
    $galeri7ResimAd=$_FILES["galeri7Resim"]["name"]; // dosya adı
    $galeri7ResimKaydet=move_uploaded_file($galeri7ResimKaynak, $dosyaYolu."/".$galeri7ResimAd); // resmimizi klasöre kayıt ettiriyoruz.
  }

  $galeri7CalismaAdi =$_POST['galeri7CalismaAdi'];

// Galeri 8 resmini sunucuya yükler
if(empty($_FILES["galeri8Resim"]["error"] != "4")){
    $baglan=$db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);
    if ( $baglan->rowCount()) {
        foreach( $baglan as $row) {
            $galeri8ResimAd=$row['galeri8Resim'];
        }
    }
  }
  
  else {
    $galeri8ResimKaynak=$_FILES["galeri8Resim"]["tmp_name"]; // tempdeki adı
    $galeri8ResimAd=$_FILES["galeri8Resim"]["name"]; // dosya adı
    $galeri8ResimKaydet=move_uploaded_file($galeri8ResimKaynak, $dosyaYolu."/".$galeri8ResimAd); // resmimizi klasöre kayıt ettiriyoruz.
  }

$galeri8CalismaAdi =$_POST['galeri8CalismaAdi'];

$sonuc=$db->exec("UPDATE galeri SET 
galeriBolumBasligi='$galeriBolumBasligi',
galeriBolumAciklamasi='$galeriBolumAciklamasi',
galeri1Resim='$galeri1ResimAd',
galeri1CalismaAdi='$galeri1CalismaAdi',
galeri2Resim='$galeri2ResimAd',
galeri2CalismaAdi='$galeri2CalismaAdi',
galeri3Resim='$galeri3ResimAd',
galeri3CalismaAdi='$galeri3CalismaAdi',
galeri4Resim='$galeri4ResimAd',
galeri4CalismaAdi='$galeri4CalismaAdi',
galeri5Resim='$galeri5ResimAd',
galeri5CalismaAdi='$galeri5CalismaAdi',
galeri6Resim='$galeri6ResimAd',
galeri6CalismaAdi='$galeri6CalismaAdi',
galeri7Resim='$galeri7ResimAd',
galeri7CalismaAdi='$galeri7CalismaAdi',
galeri8Resim='$galeri8ResimAd',
galeri8CalismaAdi='$galeri8CalismaAdi'
WHERE id='1' ");


if($sonuc){
  header("Location:galeri.php?sonuc=kaydedildi");
}
elseif (!isset($sonuc)) {

  header("Location:galeri.php?sonuc=kayıt-basarisiz");
}
else 
{
    header("Location:galeri.php?sonuc=gecersiz-islem");
}
$db =null;

