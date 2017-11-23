<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{
	function ambil_user(){
		return $this->db->get('user');
	}
}
?>