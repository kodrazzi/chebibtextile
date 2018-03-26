<?php

include "functions.php";
$id=$_GET['id'];
$dosyaYolu="img/"; // başta açtıgımız klasör adımız..

if(empty($_FILES["profilFoto"]["error"] != "4")){
  $ProfilFotoAd="avatar5.png";
}

else {
  $ProfilFotoKaynak=$_FILES["profilFoto"]["tmp_name"]; // tempdeki adı
  $ProfilFotoAd=$_FILES["profilFoto"]["name"]; // dosya adı
  $ProfilFotoKaydet=move_uploaded_file($ProfilFotoKaydet, $dosyaYolu."/".$ProfilFotoAd); // resmimizi klasöre kayıt ettiriyoruz.
}


$adi=$_POST['adi'];
$soyadi=$_POST['soyadi'];
$kullaniciAdi=$_POST['kullaniciAdi'];
$email=$_POST['email'];
$sifre=$_POST['sifre'];

$sonuc=$db->exec("UPDATE users SET 
adi='$adi',
soyadi='$soyadi',
kullaniciAdi='$kullaniciAdi',
email='$email',
sifre='$sifre',
profilFoto='$ProfilFotoAd'
WHERE id= '$id' ");


if($sonuc){
  header("Location:profil-duzenle.php?id=$id&sonuc=kaydedildi");
}
elseif (!isset($sonuc)) {

  header("Location:profil-duzenle.php?id=$id&sonuc=kayıt-basarisiz");
}
else 
{
    header("Location:profil-duzenle.php?id=$id&sonuc=gecersiz-islem");
}
$db =null;





