<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model
{
	public function GetMahasiswa($table)
	{
		// $data = $this->db->query("SELECT * FROM mahasiswa");
		// return $data->result_array();

		// utk pilih tabel yg ditampilkan
		$res = $this->db->get($table);

		// return hasil operasi $res mjd array / ditaroh ke array
		return $res->result_array();
	}

	public function Insert($table, $data)
	{
		// untuk insert new record ke dlm sebuah tabel 
		$res = $this->db->insert($table, $data);

		return $res;
	}

	public function Update($table, $data, $where)
	{
		// untuk merubah record yg sdh ada pd sebuah tabel 
		$res = $this->db->update($table, $data, $where);

		return $res;
	}


	public function Delete($table, $where)
	{
		// untuk delete record yang sudah ada
		// $where itu nama atributnya
		$res = $this->db->delete($table, $where);

		return $res;
	}

	public function GetWhere($table, $data)
	{
    	$res=$this->db->get_where($table, $data);
    
    	return $res->result_array();
	}
}

?>