<?php
$to      = $_POST['name'];
$subject = $_POST['email'];
$message = $_POST['message'];
$headers = 'From: atrevisanut@gmail.com' . "\r\n" .
    'Reply-To: atrevisanut@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
