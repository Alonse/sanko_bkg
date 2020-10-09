<?php
require $_SERVER['DOCUMENT_ROOT'].'/wp-load.php';

$to = carbon_get_theme_option('email'); 

// тема письма
$subject = 'Message from site';
$recepient = 'admin@denissanko.com';

$name       = stripslashes($_POST['name']);
$mail       = stripslashes($_POST['email']);
$phone      = stripslashes($_POST['phone']);
$text       = stripslashes($_POST['message']);
$page       = stripslashes($_POST['page']);

$message    = 'Письмо со страницы "'.$page.'"'."\r\n";
$message   .= 'Имя: '.$name."\r\n";
$message   .= 'Email: '.$mail."\r\n";
$message   .= 'Телефон: '.$phone."\r\n";
$message   .= 'Сообщение: '.$text;

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

// mail($recepient, $pagetitle, $message, );
