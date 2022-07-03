<?php

$name = $_POST["fullname"];
$company = $_POST["company"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$message= $_POST["message"];

$to = "codafarm@gamil.com";
$subject = "Mail from coda farm";
$txt = "Fullname = ". $name . "\r\n Company =". $company . "\r\n Email =". $email . "\r\n Phone =". $phone . "\r\n Message =". $message;

$header = "From: noreply@codafarm.com" . "\r\n" .

?>