<?php

$id = $_GET['id'];
$last_edit_date= date("Y-m-d h:i:s");
if($id)
{
  include "./config/config.php";
  
    $slider_delete = $db->prepare("UPDATE sliders SET is_deleted=?, last_edit_date=? WHERE id=?");
    $sil = $slider_delete->execute(array(1,$last_edit_date,$id));
    if ( $sil ){
      header("Location:main.php?p=slides&r=deleted");
    }
    else{echo 'silinemedi';}
}
?>