<?php 
include "functions.php";
session_start();
$yeniSiteAdi=$_POST['site-basligi'];
$yeniSiteAciklamasi=$_POST['site-aciklamasi'];
$dosyaYolu="img/"; // başta açtıgımız klasör adımız..

// Logo resmini sunucuya yükler
if(empty($_FILES["logoCek"]["error"] != "4")){
    $baglan=$db->query("SELECT * FROM logofav", PDO::FETCH_ASSOC);
    if ( $baglan->rowCount()) {
        foreach( $baglan as $row) {
            $logoAd=$row['logo'];
        }
    }
}

else {
    $logoKaynak=$_FILES["logoCek"]["tmp_name"]; // tempdeki adı
    $logoAd=$_FILES["logoCek"]["name"]; // dosya adı
    $logoKaydet=move_uploaded_file($logoKaynak, $dosyaYolu."/".$logoAd); // resmimizi klasöre kayıt ettiriyoruz.
}

//Sosyal Medya Resmi 600*300 sunucuya yükler
if(empty($_FILES["sosyalMedya63"]["error"] != "4")) {
    $baglan2=$db->query("SELECT * FROM logofav", PDO::FETCH_ASSOC);
    if ( $baglan2->rowCount()) {
        foreach( $baglan2 as $row) {
            $sosyalMedya63Ad=$row['sosyalMedya63'];
        }
    }
}

else {
    $sosyalMedya63Kaynak=$_FILES["sosyalMedya63"]["tmp_name"];
    $sosyalMedya63Ad=$_FILES["sosyalMedya63"]["name"];
    $sosyalMedya63Kaydet=move_uploaded_file($sosyalMedya63Kaynak, $dosyaYolu."/".$sosyalMedya63Ad);
}

//Sosyal Medya Resmi 80*80 sunucuya yükler
if(empty($_FILES["sosyalMedya88"]["error"] != "4")) {
    $baglan3=$db->query("SELECT * FROM logofav", PDO::FETCH_ASSOC);
    if ( $baglan3->rowCount()) {
        foreach( $baglan3 as $row) {
            $sosyalMedya88Ad=$row['sosyalMedya88'];
        }
    }
}

else {
    $sosyalMedya88Kaynak=$_FILES["sosyalMedya88"]["tmp_name"];
    $sosyalMedya88Ad=$_FILES["sosyalMedya88"]["name"];
    $sosyalMedya88Kaydet=move_uploaded_file($sosyalMedya88Kaynak, $dosyaYolu."/".$sosyalMedya88Ad);
}

//Favicon resmi 180*180 sunucuya yükler
if(empty($_FILES["favicon1818"]["error"] != "4")) {
    $baglan4=$db->query("SELECT * FROM logofav", PDO::FETCH_ASSOC);
    if ( $baglan4->rowCount()) {
        foreach( $baglan4 as $row) {
            $fav18Ad=$row['favicon1818'];
        }
    }
}

else {
    $fav18Kaynak=$_FILES["favicon1818"]["tmp_name"];
    $fav18Ad=$_FILES["favicon1818"]["name"];
    $fav18Kaydet=move_uploaded_file($fav18Kaynak, $dosyaYolu."/".$fav18Ad);
}

//Favicon resmi 32*32 sunucuya yükler
if(empty($_FILES["favicon3232"]["error"] != "4")) {
    $baglan5=$db->query("SELECT * FROM logofav", PDO::FETCH_ASSOC);
    if ( $baglan5->rowCount()) {
        foreach( $baglan5 as $row) {
            $fav32Ad=$row['favicon3232'];
        }
    }
}

else {
    $fav32Kaynak=$_FILES["favicon3232"]["tmp_name"];
    $fav32Ad=$_FILES["favicon3232"]["name"];
    $fav32Kaydet=move_uploaded_file($fav32Kaynak, $dosyaYolu."/".$fav32Ad);
}

//Favicon resmi 16*16 sunucuya yükler
if(empty($_FILES["favicon1616"]["error"] != "4")) {
    $baglan6=$db->query("SELECT * FROM logofav", PDO::FETCH_ASSOC);
    if ( $baglan6->rowCount()) {
        foreach( $baglan6 as $row) {
            $fav16Ad=$row['favicon1616'];
        }
    }
}

else {
    $fav16Kaynak=$_FILES["favicon1616"]["tmp_name"];
    $fav16Ad=$_FILES["favicon1616"]["name"];
    $fav16Kaydet=move_uploaded_file($fav16Kaynak, $dosyaYolu."/".$fav16Ad);
}


$sonuc2=$db->exec("UPDATE logofav SET siteBasligi='$yeniSiteAdi', siteAciklamasi='$yeniSiteAciklamasi', logo='$logoAd', sosyalMedya63='$sosyalMedya63Ad',	sosyalMedya88='$sosyalMedya88Ad', favicon1818='$fav18Ad',favicon3232='$fav32Ad', favicon1616='$fav16Ad' WHERE id='1' ");

if($sonuc2) 
{
    header("Location:meta-favicon-logo.php?sonuc=kaydedildi");
}

elseif (!isset($sonuc2)) {
    
    header("Location:meta-favicon-logo.php?sonuc=kayıt-basarisiz");
}
else 
{
    header("Location:meta-favicon-logo.php?sonuc=gecersiz-islem");
}
$db =null;

