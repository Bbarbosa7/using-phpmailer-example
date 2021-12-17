<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as MailException;

$phpMailer = new PHPMailer();

/*
 * [ configure ]
 */

try {
    $mail = new PHPMailer(true);

    //CONFIG
    $mail->isSMTP();
    $mail->setLanguage("br");
    $mail->isHTML(true);
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->CharSet = 'utf-8';

    //AUTH
    $mail->Host = "smtp.sendgrid.net";
    $mail->Username = "sua-api-do-sendgrid";
    $mail->Password = "********************************";
    $mail->Port = "587";

    //MAIL
    $mail->setFrom("brayann.wheberth@gmail.com", "Brayann Barbosa");
    $mail->Subject = "Este é meu envio via componente FSPHP";
    $mail->msgHTML("<h1>Olá Mundo!</h1><p>Esse é meu primeiro disparo de email.</p>");

    //SEND
    $mail->addAddress("bwbgestaoimob@gmail.com", "BWB Gestão Imobiliária");
    $send = $mail->send();

} catch (MailException $exception) {
    echo $exception->getMessage();
}
