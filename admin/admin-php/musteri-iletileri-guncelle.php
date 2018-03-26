<?php
include "functions.php";

$musteri1Adi=$_POST['musteri1Adi'];
$musteri1Mesaji=$_POST['musteri1Mesaji'];
$musteri2Adi=$_POST['musteri2Adi'];
$musteri2Mesaji=$_POST['musteri2Mesaji'];
$musteri3Adi=$_POST['musteri3Adi'];
$musteri3Mesaji=$_POST['musteri3Mesaji'];
$musteri4Adi=$_POST['musteri4Adi'];
$musteri4Mesaji=$_POST['musteri4Mesaji'];
$musteri5Adi=$_POST['musteri5Adi'];
$musteri5Mesaji=$_POST['musteri5Mesaji'];

$sonuc=$db->exec("UPDATE musteriİletileri SET 
musteri1Adi='$musteri1Adi',
musteri1Mesaji='$musteri1Mesaji',
musteri2Adi='$musteri2Adi',
musteri2Mesaji='$musteri2Mesaji',
musteri3Adi='$musteri3Adi',
musteri3Mesaji='$musteri3Mesaji',
musteri4Adi='$musteri4Adi',
musteri4Mesaji='$musteri4Mesaji',
musteri5Adi='$musteri5Adi',
musteri5Mesaji='$musteri5Mesaji'
WHERE id='1' ");

if($sonuc){
  header("Location:musteri-iletileri.php?sonuc=kaydedildi");
}
elseif (!isset($sonuc)) {

  header("Location:musteri-iletileri.php?sonuc=kayıt-basarisiz");
}
else 
{
    header("Location:musteri-iletileri.php?sonuc=gecersiz-islem");
}
$db =null;







