<?php
include "functions.php";
if($_POST['kayitSifre'] == $_POST['sifre-tekrar'])
{
    $uyeKayit = $db->prepare("INSERT INTO users SET
    kullaniciAdi = ?,
    sifre = ?,
    email = ?");
    $ekle = $uyeKayit->execute(array($_POST['kayitAdi'], $_POST['kayitSifre'], $_POST['kayitEmail']));
    if ( $ekle ){
        header("Location:kullanici-ekle.php?sonuc=kullanici-eklendi");  
    }
}
else{
    echo "şifreler uyuşmadı";
}