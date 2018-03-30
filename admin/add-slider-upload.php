<?php
if($_POST){

    include "./config/config.php";
    include "./config/fConfig.php";
    $dosyaYolu="public_html/assets/img/slides"; // dosya yolunu yanlış yazmışız :) tmm

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



    $slogan_1_tr =$_POST['slogan-1-tr'];
    $slogan_1_en =$_POST['slogan-1-en'];
    $slogan_2_tr =$_POST['slogan-2-tr'];
    $slogan_2_en =$_POST['slogan-2-en'];
    
    $slider_kayit = $db->prepare("INSERT INTO sliders SET
    slogan_1_tr = ?,
    slogan_1_en = ?,
    slogan_2_tr = ?,
    slogan_2_en = ?,
    slider_photo_name = ?");
    
    $sonuc = $slider_kayit->execute(array($slogan_1_tr, $slogan_1_en, $slogan_2_tr, $slogan_2_en,$resimAdi));

    if($sonuc){
      header("Location:main.php?p=add-slider&sonuc=slider-kaydedildi");
    }
    else 
    {
        header("Location:main.php?p=add-slider&sonuc=gecersiz-islem");
    }
    $db =null;
    
}
?>
