<?php

class Main_model extends CI_Model{

	public function can_login($user_email, $user_password){

		// $query = $this->db->query("SELECT * FROM `codeigniter_register` WHERE `username` = $username AND `password` = $password");
		$this->db->where('email', $user_email);
		$this->db->where('password', $user_password);
		$query = $this->db->get('constituent');
		
		if($query->num_rows() > 0){
			return $query;
		}
		else{
			return false;
		}
	}

	public function register($data){

		$emails = $data["email"];
		$this->db->where('email', $emails);
		$query = $this->db->get('constituent');

		if($query->num_rows() == 0){

			$this->db->insert("constituent", $data);
			return true;
		}
		else{
			return false;
		}
	}

	public function enter_complaint($data){

		$this->db->insert("complaints", $data);
		return true;

	}

	public function fetch_data_complaint(){

		$query = $this->db->query("SELECT * FROM complaints ORDER BY id DESC");
    return $query;
	}
}