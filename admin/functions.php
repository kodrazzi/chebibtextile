<?php
  $dbip ="127.0.0.1";
  $dbname ="chebibtekstil_web";
  $dbuser ="chebibtekstil_admin";
  $password ="Chebib_123456";
  try {
    $db = new PDO("mysql:host=$dbip;dbname=$dbname; charset=utf8", $dbuser, $password);
  } catch ( PDOException $e ){
    print $e->getMessage();
  }