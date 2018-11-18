<?php 
require 'email.php';
require 'template/emailContactUser.php';

$dados = $_POST['data'];

$email = new Email();
$templateEmail = new emailContactUser($dados);
$mail = $email->getMail();

$mail->setFrom('limaesouzaadvogadospoa@gmail.com');
$mail->addReplyTo($dados['contact-email']);
$mail->addAddress('lisi_rmorais@hotmail.com', 'Lima e Souza');
$mail->addAddress('limaesouzaadvogadospoa@gmail.com', 'Lima e Souza');


$mail->isHTML(true);
$mail->Subject = $dados['contact-name'].' - Novo Contato';
$mail->Body    = $templateEmail->getTemplateEmail();
$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';

// print_r($mail); var_dump($mail); die();

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}