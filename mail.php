<?php

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$to = 'info@proverstka.com.ua'; // обратите внимание на запятую
$subject = 'Письмо 1';

$message = file_get_contents("1.txt");



mail($to, $subject, $message, $headers);
?>



