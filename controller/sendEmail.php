<?php 
require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require '../vendor/phpmailer/phpmailer/class.phpmailer.php';

$dados = $_POST['data'];
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'limaesouzaadvogadospoa@gmail.com';
$mail->Password = '!@12qwaszx';
$mail->Port = 587;

$mail->setFrom('limaesouzaadvogadospoa@gmail.com');
$mail->addAddress($dados['contact-email'], $dados['contact-name']);
$mail->addAddress('limaesouzaadvogadospoa@gmail.com', "$dados['contact-name']");

$mail->isHTML(true);
$mail->Subject = 'Lima e Souza Advogados';
$mail->Body    = $dados['contact-message'];
$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';


if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}