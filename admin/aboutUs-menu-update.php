<?php

$id = $_POST['id'];
if($id)
{
  include "./config/config.php";
  
  $a_s_tr = $_POST['aboutUs-sidebar-tr'];
  $a_s_en = $_POST['aboutUs-sidebar-en'];
  $s_s_text_tr = $_POST['aboutUs-sidebar-tr-text'];
  $s_s_text_en = $_POST['aboutUs-sidebar-en-text'];
  
    $aboutUs_update = $db->prepare("UPDATE aboutUs SET sidebar_tr = ?, sidebar_en = ?, text_tr = ?, text_en = ? WHERE id=?");
    $ekle = $aboutUs_update->execute(array($a_s_tr,$a_s_en, $s_s_text_tr,$s_s_text_en,$id));
    if ( $ekle ){
      header("Location:main.php?p=aboutUs-menu&r=updated");
    }
    else{echo 'güncellenmedi';}
}
?>