<?php

include "functions.php";
$facebook = $_POST['facebook'];
$instagram =$_POST['instagram'];
$googlePlus=$_POST['googlePlus'];
$youtube =$_POST['youtube'];
$twitter=$_POST['twitter'];
$foursquare =$_POST['foursquare'];
$telefon=$_POST['telefon'];
$email=$_POST['email'];
$acikAdres=$_POST['acikAdres'];
$googleMaps=$_POST['googleMaps'];

$sonuc=$db->exec("UPDATE genelBilgiler SET facebook='$facebook',	instagram='$instagram', googlePlus='$googlePlus', youtube='$youtube',	twitter='$twitter', foursquare='$foursquare', telefon='$telefon', email='$email', acikAdres='$acikAdres', googleMaps='$googleMaps' WHERE id='1' ");


if($sonuc)
{
  header("Location:kurumsal-bilgiler.php?sonuc=kaydedildi");
}
elseif (!isset($sonuc)) {
  header("Location:kurumsal-bilgiler.php?sonuc=kayit-basarisiz");
}
else {
  header("Location:kurumsal-bilgiler.php?sonuc=gecersiz-islem");
}









