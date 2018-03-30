<?php
if($_POST){

    include "./config/config.php";
    include "./config/fConfig.php";
    $dosyaYolu="public_html/assets/img/about"; // dosya yolunu yanlış yazmışız :) tmm

    $tmp_name = $_FILES['file']['tmp_name']; // tempdeki adı
    $resimAdi = $_FILES['file']['name']; // dosya adı
    $hata = $_FILES['file']['error'];

    $rnd = rand(10000000,99999999);
    $photo_name = explode(".",$resimAdi);

    $photo_name1= $photo_name[0];
    $photo_name2= $photo_name[1];

    $resimAdi= $photo_name1.$rnd.".".$photo_name2;

    echo $resimAdi;
    
    if(ftp_put($conn,$dosyaYolu.'/'.$resimAdi,$tmp_name,FTP_BINARY)){

      echo " sorunsuzca karşıya yüklendi";
      
    }
    else{
        echo " RESİM YÜKLENEMEDİ";
    }



    $photo_name =$_POST['photo_name'];
    $kind =$_POST['kind'];
    
    $slider_kayit = $db->prepare("INSERT INTO gallery SET
    photo_name = ?,
    kind = ?");
    
    $sonuc = $slider_kayit->execute(array($resimAdi,$kind));

    if($sonuc){
      header("Location:main.php?p=gallery&sonuc=fotograf-kaydedildi");
    }
    else 
    {
        header("Location:main.php?p=gallery&sonuc=gecersiz-islem");
    }
    $db =null;
    
}
?>