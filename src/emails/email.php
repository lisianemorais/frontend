<?php  
require '../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require '../../vendor/phpmailer/phpmailer/class.phpmailer.php';
/**
 * 
 */
class Email
{
	private $mail;

	function __construct()
	{
		$this->mail = new PHPMailer();
		$this->mail->isSMTP();
		$this->mail->Host = 'smtp.gmail.com';
		$this->mail->SMTPAuth = true;
		$this->mail->SMTPSecure = 'tls';
		$this->mail->Username = 'limaesouzaadvogadospoa@gmail.com';
		$this->mail->Password = '!@12qwaszx';
		$this->mail->Port = 587;
	}

	public function getMail(){
		return $this->mail;
	}

}