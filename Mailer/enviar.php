<?php

require_once './vendor/autoload.php';

$mail = Swift_Message::newInstance();

$mail->addFrom("elaborata@elaborata.com.br");
$mail->addTo("aluno@atrasado.com.br");
$mail->setSubject("Cuidado para nao atrasar ");
$mail->setBody("cuidado ou nao vai diploma, nem pagando chopp...");



$server = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl');
$server->setUsername('pa90887@gmail.com');
$server->setPassword('Agora@20');

$carteiro = Swift_Mailer::newInstance($server);
$carteiro->send($mail);






