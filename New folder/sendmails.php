<?php

$to_email = "sharwan981052@gmail.com";
$subject = "Test Mail from Localhost";
$body = "Hello! This is test email";
$headers = "From: sharwan981052@gmail.com";

if(mail($to_email, $subject, $body, $headers)){
    echo "Email Successfully sent to $to_email...";
}else{
    echo "Email Sending Failed";
}


?>