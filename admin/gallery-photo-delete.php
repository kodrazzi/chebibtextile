<?php

$id = $_GET['id'];
if($id)
{
  include "./config/config.php";
  
    $photo_delete = $db->prepare("DELETE FROM gallery WHERE id=?");
    $sil = $photo_delete->execute(array($id));
    if ( $sil ){
      header("Location:main.php?p=gallery&r=deleted");
    }
    else{echo 'silinemedi';}
}
?>