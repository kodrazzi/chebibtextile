<?php 
include "functions.php";
$dosyaYolu="img/";

if(empty($_FILES["resimLink"]["error"] != "4")){
  $baglan=$db->query("SELECT * FROM misyonumuz", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
          $ad=$row['resimLinki'];
      }
  }
}

else {
$kaynak=$_FILES["resimLink"]["tmp_name"]; // tempdeki adı
$ad=$_FILES["resimLink"]["name"]; // dosya adı
$logoKaydet=move_uploaded_file($kaynak, $dosyaYolu."/".$ad); // resmimizi klasöre kayıt ettiriyoruz.
}

$icerik = $_POST['editor'];

$sonuc=$db->exec("UPDATE misyonumuz SET resimLinki='$ad', icerik='$icerik' WHERE id='1' ");

if($sonuc){
  header("Location:kurumsal-bilgiler-misyonumuz.php?sonuc=kaydedildi");
}
elseif (!isset($sonuc)) {

  header("Location:kurumsal-bilgiler-misyonumuz.php?sonuc=kayıt-basarisiz");
}
else 
{
    header("Location:kurumsal-bilgiler-misyonumuz.php?sonuc=gecersiz-islem");
}
$db =null;
















