<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'confirmaconsulta@hotmail.com';
    $mail->Password = 'ramos1763';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configuração do e-mail
    $mail->setFrom('confirmaconsulta@hotmail.com', 'Instituto de Ortodontia');
    $mail->addAddress('confirmaconsulta@hotmail.com', 'Instituto de Ortodontia');
    $mail->isHTML(true);
    $mail->Subject = 'Teste PHPMailer';
    $mail->Body    = 'Este é um e-mail de teste.';

    // Envio do e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
}
