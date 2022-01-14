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

	public function delete_complaint($id){

    $query = $this->db->query("DELETE FROM complaints WHERE id = $id");
    return $query;
  }

	public function enter_announcement($data){

		$this->db->insert("announcements", $data);
		return true;
	}

	public function fetch_data_announcement(){

		$query = $this->db->query("SELECT * FROM announcements ORDER BY id DESC");
    return $query;
	}

	public function delete_announcement($id){

		$query = $this->db->query("DELETE FROM announcements WHERE id = $id");
    return $query;
	}

	public function apply_permit($data){

		$this->db->insert("business_permit", $data);
		return true;
	}

	public function fetch_data_permit(){

		$query = $this->db->query("SELECT * FROM business_permit ORDER BY id DESC");
    return $query;
	}

	public function permit_datas($id){

		$this->db->where('id', $id);
		$query = $this->db->get('business_permit');
		return $query;
	}

	public function permit_status($id, $permit_status){

		if($permit_status == "approve"){
			$this->db->where("id", $id);
      $this->db->update("business_permit", array('status' => "Approve"));
		}
		else{
			$this->db->where("id", $id);
      $this->db->update("business_permit", array('status' => "Decline"));
		}
	}

	public function permit_response($response_data, $type){

		if($type == "Business Permit"){
			$this->db->insert("response", $response_data);
		}
	}

	public function fetch_inbox($consti_id){

		$this->db->where("consti_id", $consti_id);
		$this->db->order_by('id', 'DESC');
    return $query = $this->db->get("response");

	}



}