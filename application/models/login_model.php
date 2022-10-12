<?php 

class Login_model extends CI_Model{
	public function login($username, $password){
		$this->db->select('*');
		$this->db->from('tb_admin');
		$this->db->where(array('username'=>$username, 'password'=>$password));
		return $this->db->get()->row();
	}
}

 ?>