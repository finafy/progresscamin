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

	public function regis()
	{
    	$this->load->model('m_user');
    	$data = array(
        'no_induk' => $this->input->post('no_induk'),
        'nama' => $this->input->post('nama'),
        'alamat' => $this->input->post('alamat')
         );
    	$data = $this->mymodel->Insert('mahasiswa', $data);
    	redirect(base_url(),'refresh');
	}	
	
}
