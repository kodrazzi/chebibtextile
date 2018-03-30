<?php
  $userName = 'chebibtekstil';
  $userPass = 'Chebib_123456';
  $conn = ftp_connect('chebibtekstil.com');
  $login = ftp_login($conn, $userName, $userPass);
?>