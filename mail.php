<?php
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'info@proverstka.com.ua';
$subject = 'Письмо 1';

$message = file_get_contents("1.txt");
mail($to, $subject, $message, $headers);
?>



