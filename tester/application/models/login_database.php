<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

	Class Login_database extends CI_Model
	{

		// input data to db
		public function registration_insert($data)
		{
			$condition = "NRP =" . "'" . $data['A_NRP'] . "'";
			$this->db->select('*');
			$this->db->from('akun');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
		

			if($query->num_rows() == 1)
			{
				return true;
			}

			else
			{
				return false;
			}
		}

		// Read data from database to show data in admin page
public function read_user_information($username) {

$condition = "user_name =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('user_login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

}





	}

?>