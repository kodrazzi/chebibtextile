<?php
include "functions.php";

$headScripti = $_POST['editor1'];
$bodyScripti = $_POST['editor2'];

$sonuc=$db->exec("UPDATE ozelScriptler SET headScripti='$headScripti', bodyScripti='$bodyScripti' WHERE id='1'");

if ($sonuc) {
  header("Location:stil-ve-scriptler.php?sonuc=kaydedildi");
}
elseif (!isset($sonuc)) {
  header("Location:stil-ve-scriptler.php?sonuc=kayit-basarisiz");
}
else {
  header("Location:stil-ve-scriptler.php?sonuc=gecersiz-islem");
}
$db =null;