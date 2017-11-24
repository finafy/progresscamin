<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	public function index()
	{
		// $data = $this->db->query("SELECT * FROM mahasiswa");
		
		//$this->load->view('hello', $data);
		
		// konekin M sama C
		$this->load->model('mymodel');

		// akses fungsi pada model(M)
		// mahasiswa == nama tabel
		$data = $this->mymodel->GetMahasiswa('mahasiswa');

		// ubah data yang dipanggil dari M mjd array
		$data = array('data' => $data);

		// $data membawa data dari M ke V
		$this->load->view('data_mahasiswa', $data);

		// foreach ($data as $mahasiswa) {
		// 	echo "Nama : " .$mahasiswa['nama']."<br/>";
		// 	echo "Alamat : " .$mahasiswa['alamat']."<hr/>";
		// }

	}

	public function add_data()
	{
    	$this->load->view('form_add');
	}

	public function insert()
	{
    	$this->load->model('mymodel');
    	$data = array(
        'no_induk' => $this->input->post('no_induk'),
        'nama' => $this->input->post('nama'),
        'alamat' => $this->input->post('alamat')
         );
    	$data = $this->mymodel->Insert('mahasiswa', $data);
    	redirect(base_url(),'refresh');
	}	

	public function delete_data($noinduk)
	{
		// 'no_induk' nama atribut tabel
    	$noinduk = array('no_induk' => $noinduk);
    	$this->load->model('mymodel');
    	$this->mymodel->Delete('mahasiswa', $noinduk);
    	redirect(base_url(),'refresh');
	}

	public function edit_data($noinduk)
	{
    	$this->load->model('mymodel');
    	$siswa = $this->mymodel->GetWhere('mahasiswa', array('no_induk' => $noinduk));
    	$data = array(
        	'no_induk' => $siswa[0]['no_induk'],
        	'nama' => $siswa[0]['nama'],
        	'alamat' => $siswa[0]['alamat'],
        	);
    	$this->load->view('form_edit', $data); 
	}

	public function update_data()
	{
    	$no_induk = $_POST['ni'];
    	$nama = $_POST['nama'];
    	$alamat = $_POST['alamat'];
    	$data = array(
        	'nama' => $nama,
        	'alamat' => $alamat
     	);
    	$where = array(
        	'no_induk' => $no_induk,
    	);
    	$this->load->model('mymodel');
    	$res = $this->mymodel->Update('mahasiswa', $data, $where);
    	if ($res>0) {
        	redirect('start/index','refresh');
    	}
	}	

}
