<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function signup()
	{
		$this->load->view('registration/signup');
	}
}
