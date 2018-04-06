<?php

$to = 'aliihsansuna@outlook.com';
$subject = 'Message from Locations';

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$message =stripslashes($_POST['message']);

if(isset(stripslashes($_POST['name']))){
    
    $name = stripslashes($_POST['name']);
    $body .= "Name: ";
    $body .= $name;
    $body .= "\n\n";
}
if( isset(stripslashes($_POST['subject']) )){
    $subject = stripslashes($_POST['subject']);
}
if( isset(trim($_POST['email']) ){
    $email = trim($_POST['email']);

    $body .= "";
    $body .= "Email: ";
    $body .= $email;
    $body .= "\n\n";
}

if( isset(stripslashes($_POST['message']) ){
    $message = '';
    $body .= "";
    $body .= "Message: ";
    $body .= $message;
    $body .= "\n\n";
}

$headers = 'From: ' .$email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";





if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
mb_send_mail($to, $subject, $body, $headers);
    echo '<div class="status-icon valid"><i class="icon_check"></i></div>';
}
else{
    echo '<div class="status-icon invalid"><i class="icon_close"></i></div>';
}
header("Location: http://chebibtekstil.com/iletisim.php?message=success");
