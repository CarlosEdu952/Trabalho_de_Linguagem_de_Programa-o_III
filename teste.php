<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    // Configuração do servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'beneditogsjunior@gmail.com';
    $mail->Password   = 'cajdwdtfmimbaoit';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Remetente e destinatário
    $mail->setFrom('beneditogsjunior@gmail.com', 'Sistema');
    $mail->addAddress('beneditogsjunior@gmail.com');

    // Conteúdo do email
    $mail->isHTML(true);
    $mail->Subject = 'Teste de Email';

    $mail->Body = '
        <h1>Email enviado com sucesso</h1>
        <p>PHPMailer funcionando corretamente.Pode trocar a senha</p>
    ';

    // Enviar email
    $mail->send();

    echo "Email enviado com sucesso!.";
    header("Location: Recuperaçao.php");

} catch (Exception $e) {

    echo "Erro ao enviar email: {$mail->ErrorInfo}";
}

?>