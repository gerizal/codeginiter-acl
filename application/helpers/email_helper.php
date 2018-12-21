<?php
/**
 * @author   Natan Felles <natanfelles@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
 
function send_mail($email,$name,$message,$subject){
	$CI =& get_instance();
	date_default_timezone_set('Asia/Jakarta');
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = $CI->config->item('smtp_server');
	$mail->Port = $CI->config->item('smtp_port');
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = $CI->config->item('smtp_username');
	$mail->Password = base64_decode($CI->config->item('smtp_password'));
	$mail->setFrom($CI->config->item('mail_noreply'), $CI->config->item('mail_signature'));
	$mail->addAddress($email, $name);
	$mail->Subject = $subject;
	$CI->data['nama'] = $name;
	$CI->data['message'] = $message;
	$CI->data['email'] = $email;
	$mail->msgHTML($CI->load->view('mail/confirmation',$CI->data,TRUE));
	if(!$mail->send()){
		return FALSE;
	}else{
		return TRUE;
	}
}
function forgot_password($email,$name,$link,$code){
	$CI =& get_instance();
	date_default_timezone_set('Asia/Jakarta');
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = $CI->config->item('smtp_server');
	$mail->Port = $CI->config->item('smtp_port');
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = $CI->config->item('smtp_username');
	$mail->Password = $CI->config->item('smtp_password');
	$mail->setFrom($CI->config->item('mail_noreply'), $CI->config->item('mail_signature'));
	//$mail->addReplyTo('replyto@example.com', 'First Last');
	$mail->addAddress($email, $name);
	$mail->Subject = 'Reset password akun basecode';
	$CI->data['nama'] = $name;
	$CI->data['email'] = $email;
	$CI->data['kode'] = $code;
	$CI->data['linkreset'] = base_url($link);
	$mail->msgHTML($CI->load->view('mail/forgot_password',$CI->data,TRUE));
	if (!$mail->send()) {
		return false;
	} else {
		return true;
	}
}
