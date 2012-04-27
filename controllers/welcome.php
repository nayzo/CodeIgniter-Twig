<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->library('twig');
		$this->twig->render('welcome_message', array('my_variable' => 'Twig is working -- Hello world!'));
	}
}