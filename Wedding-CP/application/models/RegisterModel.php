<?php
class RegisterModel extends CI_Model
{

	function register_user()
	{
		$data = array(
				'USER_NAMA' 			=> $this->input->post('nama'),
				'USER_EMAIL' 		=> $this->input->post('email'),
				'USER_USERNAME' 		=> $this->input->post('username'),
				'USER_PASSWORD' 		=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
		);
		$result=$this->db->insert('USER',$data);
		return $result;
	}


}
