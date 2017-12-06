<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('users_model');
	}

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

	public function list()
	{
		$data['user_list'] = $this->users_model->get_all_users();

		$this->load->view('show_users', $data);
	}

	public function insert_new_user()
	{
		$udata['A_NRP'] = $this->input->post('NRP');
		$udata['A_NAMA'] = $this->input->post('Username');
		$udata['A_EMAIL'] = $this->input->post('Email');
		$udata['A_STATUS'] = $this->input->post('Status');
		$udata['A_PASS'] = $this->input->post('Pass');

		$res = $this->users_model->insert_users_to_db($udata);
		if($res)
		{
			header('location:'.base_url());
		}
	}

	// public function regis()
	// {
 //    	$this->load->model('m_user');
 //    	$data = array(
 //        'no_induk' => $this->input->post('no_induk'),
 //        'nama' => $this->input->post('nama'),
 //        'alamat' => $this->input->post('alamat')
 //         );
 //    	$data = $this->mymodel->Insert('mahasiswa', $data);
 //    	redirect(base_url(),'refresh');
	// }	
	
}
