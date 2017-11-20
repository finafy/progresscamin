<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('test');
	}

	public function login()
	{
		$this->load->view('formhehe');
	}

	public function regis()
	{
		$this->load->view('signup');
	}

	public function coba()
	{
		$this->load->view('dalem');
	}
	
}
