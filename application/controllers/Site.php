<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function contato()
	{
		$to = 'comercial@svwcomercial.com';
		$subject = 'the subject';
		$message = 'Nova Mensagem SVWCapital';
		$headers = 'From: comercial@svwcomercial.com' . "\r\n" .
		    'Reply-To: comercial@svwcomercial.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		if (mail($to, $subject, $message, $headers)) {
			return true;
		} else {
			return false;
		}
	}
}
