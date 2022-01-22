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

	public function permit_status($id, $permit_status, $type_response){

		if($type_response == "permit"){
			if($permit_status == "approve"){
				$this->db->where("id", $id);
				$this->db->update("business_permit", array('status' => "Approve"));
			}
			else{
				$this->db->where("id", $id);
				$this->db->update("business_permit", array('status' => "Decline"));
			}

		}else{
			if($permit_status == "approve"){
				$this->db->where("id", $id);
				$this->db->update("clearance", array('status' => "Approve"));
			}
			else{
				$this->db->where("id", $id);
				$this->db->update("clearance", array('status' => "Decline"));
			}
		}
	}

	public function permit_response($response_data, $type){

		if($type == "Business Permit"){
			$this->db->insert("response", $response_data);
		}
		else{
			$this->db->insert("response", $response_data);
		}
	}

	public function fetch_inbox($consti_id){

		$this->db->where("consti_id", $consti_id);
		$this->db->order_by('id', 'DESC');
    return $query = $this->db->get("response");

	}

	public function apply_clearance($data){

		$this->db->insert("clearance", $data);
		return true;
	}

	public function fetch_data_clearance(){

		$query = $this->db->query("SELECT * FROM clearance ORDER BY id DESC");
    return $query;
	}

	public function clearance_datas($id){

		$this->db->where('id', $id);
		$query = $this->db->get('clearance');
		return $query;
	}

	public function book_a_rent($data){

		$resources = $data["resources"];
		$hours = $data["hours"];
		$date = $data["date"];
		$status = "Approve";
		$this->db->where('resources', $resources);
		$this->db->where('hours', $hours);
		$this->db->where('date', $date);
		$this->db->where('status', $status);
		$query = $this->db->get('book_a_rent');

		if($query->num_rows() == 0){

			$this->db->insert("book_a_rent", $data);
			return true;
		}
		else{
			return false;
		}
	}
	
	public function fetch_unavailable_rent(){

		$this->db->where('status', "Approve");
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('book_a_rent');
		return $query;
	}

	public function rent_unavailable($user_email, $user_password){

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

	public function fetch_data_rent(){

		$query = $this->db->query("SELECT * FROM book_a_rent ORDER BY id DESC");
    return $query;
	}

	public function rent_data($id){

		$this->db->where('id', $id);
		$query = $this->db->get('book_a_rent');
		return $query;
	}

	public function rent_status($id, $permit_status){

		if($permit_status == "approve"){
			$this->db->where("id", $id);
			$this->db->update("book_a_rent", array('status' => "Approve"));
		}
		else if($permit_status == "decline"){
			$this->db->where("id", $id);
			$this->db->update("book_a_rent", array('status' => "Decline"));
		}
		else{
			$this->db->where("id", $id);
			$this->db->update("book_a_rent", array('status' => "Done"));
		}
	}

	public function rent_response($response_data){

		$this->db->insert("response", $response_data);
	}
}