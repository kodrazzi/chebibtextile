<?php

$_id = $_POST['id'];
if($_id)
{
  include "./config/config.php";
  
  $a_s_tr = $_POST['aboutUs-sidebar-tr'];
  $a_s_en = $_POST['aboutUs-sidebar-en'];
  $s_s_text_tr = $_POST['aboutUs-sidebar-tr-text'];
  $s_s_text_en = $_POST['aboutUs-sidebar-en-text'];
    $aboutUs_update = $db->prepare("UPDATE aboutUs SET sidebar-tr = ?, sidebar-en = ?, text-tr = ?, text-en = ? WHERE id=?");
    $ekle = $aboutUs_update->execute(array($a_s_tr,$a_s_en, $s_s_text_tr,$s_s_text_en,$_id));
    if ( $ekle ){
      echo 'db güncellendi';
       /*  header("Location:main.php?p=aboutUs-menu.php&r=updated");   */
    }
    else{echo 'güncellenmedi';}
}
?>