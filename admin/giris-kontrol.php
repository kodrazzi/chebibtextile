<?php
include "./config/config.php";
ob_start();
session_start();
$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
$sorgu = $db->query("SELECT * FROM users WHERE kullaniciAdi ='".$kadi."' and sifre ='".$sifre."'",PDO::FETCH_ASSOC) or die (mysql_error());
if ( $sorgu->rowCount() ){ 
     
    $_SESSION["login"] = "true";
    
    foreach ($sorgu as $kullanici) 
    {
        $_SESSION['user_name'] = $kullanici['adi'];
        $_SESSION['user_surname'] = $kullanici['soyadi'];
        $_SESSION['email'] = $kullanici['email'];
        $_SESSION['profil_foto'] = $kullanici['profilFoto'];
        $_SESSION['kayit_tarihi'] =$kullanici['kayitTarihi'];
        $_SESSION['id'] =$kullanici['id'];
    }
    
        header("Location:main.php");
}
else{
    header("Location:index.php?sonuc=hatali-giris");
}
//Giriş ekranı 
$sifreKilit =$_POST['sifre-kilit'];
$id=$_POST['id'];
$sorgu2 = $db->query("SELECT * FROM users WHERE id ='".$id."' and  sifre = '".$sifreKilit."'",PDO::FETCH_ASSOC) or die (mysql_error());
if ( $sorgu2->rowCount() ){ 
     
    $_SESSION["login"] = "true";
    
    foreach ($sorgu2 as $kullanici2) 
    {     
        $_SESSION['user'] = $kullanici2['adi'];
        $_SESSION['profil_foto'] = $kullanici2['profilFoto'];
        $_SESSION['kayit_tarihi'] =$kullanici2['kayitTarihi'];
        $_SESSION['id'] =$kullanici2['id'];
    }
    header("Location:main.php");
}
ob_end_flush();
?>
