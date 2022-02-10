<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('main_model');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view("welcome_view");

	}
	public function welcome_view(){
		$this->load->view("welcome_view");
	}

	public function contact_us(){
		$this->load->view("contact_us");
	}
	public function login(){
		$this->load->view("home");
	}

	public function login_validation(){

		$this->form_validation->set_rules('user_email', 'Email', 'required');
		$this->form_validation->set_rules('user_password', 'Password', 'required');
		
		if($this->form_validation->run()){
			//True
			$user_email = $_POST['user_email'];
			$user_password = $_POST['user_password'];

			//model function
			$this->load->model('main_model');
			if($this->main_model->can_login($user_email, $user_password)){

				$user_data = $this->main_model->can_login($user_email, $user_password);
				foreach($user_data->result() as $row){

					$_SESSION['id'] = $row->id;
					$_SESSION['first_name'] = $row->first_name;
					$_SESSION['last_name'] = $row->last_name;
					$_SESSION['email'] = $row->email;
					$_SESSION['priveledge'] = $row->priveledge;

				}

				if($_SESSION['priveledge'] == "consti"){

					redirect(base_url() . 'main/home');
				}
				else{
					redirect(base_url() . 'main/admin_complaint');
				}
			}
			else{
				
				$_SESSION['error'] = 'Invalid Email or Password';
				redirect(base_url() . 'main/login');
			}
		}
		else{
			//false
			$this->login();
		}
	}

	public function logout(){

		unset($_SESSION['id']);
		unset($_SESSION['first_name']);
		unset($_SESSION['last_name']);
		unset($_SESSION['email']);
		redirect(base_url() . 'main/login');
	}

	public function home(){

		// if($_SESSION['id'] != ''){
			
		//     echo '<h2>Welcome ' . $_SESSION['last_name'] . '</h2>';
		//     echo '<a href="' .base_url(). 'main/logout">Logout</a>';
		// }
		// else{

		//     redirect(base_url());
		// }
		$consti_id = $_SESSION['id'];
		$data["fetch_inbox"] = $this->main_model->fetch_inbox($consti_id);
		$data["fetch_data"] = $this->main_model->fetch_data_announcement();
		$this->load->view("enter_home", $data);
	}

	public function complaint(){

		$consti_id = $_SESSION['id'];
		$data["fetch_inbox"] = $this->main_model->fetch_inbox($consti_id);
		$this->load->view("complaint", $data);
	}

	public function create_complaint(){

		$this->form_validation->set_rules('complaint', 'Complaint', 'required');

		if($this->form_validation->run()){

			$complaint = $_POST['complaint'];
			$consti_id = $_SESSION['id'];
			$first_name = $_SESSION['first_name'];
			$last_name = $_SESSION['last_name'];
			$email = $_SESSION['email'];

			$data = array(
				"consti_id"			=>$consti_id,
				"complaints"		=>$complaint,
				"first_name"		=>$first_name,
				"last_name"			=>$last_name,
				"email"					=>$email
			);

			$this->load->model('main_model');
			if($this->main_model->enter_complaint($data)){

				$_SESSION['success'] = 'Complaint sent successfully';
				redirect(base_url() . "main/complaint");
			}

		}
		else{
			$_SESSION['error'] = 'Please type your Complaint';
			redirect(base_url() . "main/complaint");
		}
	}

	public function admin(){
		$this->load->view("admin");
	}

	public function admin_complaint(){
		$data["fetch_data"] = $this->main_model->fetch_data_complaint();
		$this->load->view("admin_complaint", $data);
	}

	public function complaint_response(){

		$this->form_validation->set_rules('response', 'Response', 'required');

		if($this->form_validation->run()){

			$consti_id = $this->uri->segment(3);
			$response = $_POST['response'];
			$type = "Complaint";
			$response_data = array(
				"consti_id" => $consti_id,
				"response_type" => $type,
				"response" => $response
			);
			$this->main_model->complaint_response($response_data);
			$id = $this->uri->segment(4);
    	$data["fetch_data"] = $this->main_model->fetch_data_complaint();
			$this->load->view("admin_complaint", $data);

		}else{
			$id = $this->uri->segment(4);
    	$data["fetch_data"] = $this->main_model->fetch_data_complaint();
			$this->load->view("admin_complaint", $data);
		}
	}

	public function delete_complaint(){
        
    $id = $this->uri->segment(3);
    $this->load->model("main_model");
    $this->main_model->delete_complaint($id);
    redirect(base_url() . "main/admin_complaint");
  }

	public function events(){
		$data["fetch_data"] = $this->main_model->fetch_data_announcement();
		$this->load->view("events", $data);
	}

	public function delete_announcement(){
        
    $id = $this->uri->segment(3);
    $this->load->model("main_model");
    $this->main_model->delete_announcement($id);
    redirect(base_url() . "main/events");
  }

	public function announcements(){

		$this->form_validation->set_rules('announcement', 'Announcement', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');

		if($this->form_validation->run()){

			$description = $_POST['announcement'];
			$title = $_POST['title'];

			$data = array(
				"title"							=>$title,
				"description"			=>$description
			);

			$this->load->model('main_model');
			if($this->main_model->enter_announcement($data)){

				$_SESSION['success'] = 'Announcement successfully created';
				redirect(base_url() . "main/events");
			}

		}
		else{
			$_SESSION['error'] = 'Please type the Announcement and Title';
			redirect(base_url() . "main/events");
		}
	}

	public function permit(){

		$consti_id = $_SESSION['id'];
		$data["fetch_inbox"] = $this->main_model->fetch_inbox($consti_id);
		$this->load->view("permit", $data);
	}

	public function permit_validation(){

		$this->form_validation->set_rules('bus_name', 'Business Name', 'required');
			$this->form_validation->set_rules('bus_address', 'Business Address', 'required');
			$this->form_validation->set_rules('bus_nature', 'Business Nature', 'required');
			$this->form_validation->set_rules('owner_name', 'Owner Name', 'required');
			$this->form_validation->set_rules('ownership_type', 'Ownership Type', 'required');
			$this->form_validation->set_rules('bir_tin', 'BIR TIN', 'required');
			$this->form_validation->set_rules('date', 'Date', 'required');

			if($this->form_validation->run()){
				//True
				$bsn_option = $_POST['flexRadioDefault'];
				$bsn_name = $_POST['bus_name'];
				$bsn_address = $_POST['bus_address'];
				$bsn_nature = $_POST['bus_nature'];
				$owner_name = $_POST['owner_name'];
				$type_owner = $_POST['ownership_type'];
				$bir_tin = $_POST['bir_tin'];
				$date = $_POST['date'];
				$consti_id = $_SESSION['id'];
				$first_name = $_SESSION['first_name'];
				$last_name = $_SESSION['last_name'];

				$data = array(
					"consti_id"            =>$consti_id,
					"first_name"           =>$first_name,
					"last_name"             =>$last_name,
					"owner_name"            =>$owner_name,
					"bsn_option"         =>$bsn_option,
					"bsn_name"          =>$bsn_name,
					"bsn_address"              =>$bsn_address,
					"bsn_nature"              =>$bsn_nature,
					"type_owner"         =>$type_owner,
					"bir_tin"     =>$bir_tin,
					"date"           =>$date
				);
				$this->load->model('main_model');
				if($this->main_model->apply_permit($data)){

					$_SESSION['success'] = 'Submit Successfull';
					redirect(base_url() . 'main/permit');
				}
			}
			else{
				//False
				$this->permit();
			}
		
	}

	public function admin_permit(){

		$id = $this->uri->segment(3);
		$data["consti_data"] = $this->main_model->permit_datas($id);
    $data["fetch_data"] = $this->main_model->fetch_data_permit();
		$this->load->view("admin_permit", $data);
	}
	
	public function permit_data(){

		$id = $this->uri->segment(3);
		$data["consti_data"] = $this->main_model->permit_datas($id);
    $data["fetch_data"] = $this->main_model->fetch_data_permit();
		$this->load->view("admin_permit", $data);

	}

	public function permit_approve(){

		$id = $this->uri->segment(3);
		$permit_status = $this->uri->segment(4);
		$type_response = $this->uri->segment(5);
		$this->main_model->permit_status($id, $permit_status, $type_response);
		if($type_response == "permit"){

			$data["consti_data"] = $this->main_model->permit_datas($id);
			$data["fetch_data"] = $this->main_model->fetch_data_permit();
			$_SESSION['success'] = 'Status change successfully';
			$this->load->view("admin_permit", $data);
		}
		else{
			$data["consti_data1"] = $this->main_model->clearance_datas($id);
			$data["fetch_data1"] = $this->main_model->fetch_data_clearance();
			$_SESSION['success'] = 'Status change successfully';
			$this->load->view("admin_clearance", $data);
		}
	}

	public function permit_response(){

		$this->form_validation->set_rules('response', 'Response', 'required');

		if($this->form_validation->run()){

			$consti_id = $this->uri->segment(3);
			$id = $this->uri->segment(5);
			$type = $this->uri->segment(4);
			$response = $_POST['response'];

			if($type == "Permit"){
				$type = "Business Permit";
				$response_data = array(
					"consti_id" => $consti_id,
					"response_type" => $type,
					"response" => $response
				);
				$this->main_model->permit_response($response_data, $type);
				$data["consti_data"] = $this->main_model->permit_datas($id);
				$data["fetch_data"] = $this->main_model->fetch_data_permit();
				$_SESSION['success'] = 'Message sent successfully';
				$this->load->view("admin_permit", $data);
			}
			else{
				$type = "Barangay Clearance";
				$response_data = array(
					"consti_id" => $consti_id,
					"response_type" => $type,
					"response" => $response
				);
				$this->main_model->permit_response($response_data, $type);
				$data["consti_data1"] = $this->main_model->clearance_datas($id);
				$data["fetch_data1"] = $this->main_model->fetch_data_clearance();
				$_SESSION['success'] = 'Message sent successfully';
				$this->load->view("admin_clearance", $data);
			}

		}else{
			$id = $this->uri->segment(5);
			$data["consti_data"] = $this->main_model->permit_datas($id);
			$data["fetch_data"] = $this->main_model->fetch_data_permit();
			$this->load->view("admin_permit", $data);
		}
	}

	public function clearance(){

		$consti_id = $_SESSION['id'];
		$data["fetch_inbox"] = $this->main_model->fetch_inbox($consti_id);
		$this->load->view("clearance", $data);
	}

	public function clearance_validation(){

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('age', 'Age', 'required');
			$this->form_validation->set_rules('date', 'Date', 'required');
			$this->form_validation->set_rules('user_civil_status', 'Civil Status', 'required');
			$this->form_validation->set_rules('purpose', 'Purpose', 'required');

			if($this->form_validation->run()){
				//True
				$name = $_POST['name'];
				$address = $_POST['address'];
				$age = $_POST['age'];
				$date = $_POST['date'];
				$user_civil_status = $_POST['user_civil_status'];
				$purpose = $_POST['purpose'];
				$consti_id = $_SESSION['id'];
				$first_name = $_SESSION['first_name'];
				$last_name = $_SESSION['last_name'];

				$data = array(
					"consti_id"              =>$consti_id,
					"first_name"              =>$first_name,
					"last_name"         =>$last_name,
					"name"            =>$name,
					"address"           =>$address,
					"age"             =>$age,
					"user_civil_status"         =>$user_civil_status,
					"purpose"          =>$purpose,
					"date"            =>$date,
				);
				$this->load->model('main_model');
				if($this->main_model->apply_clearance($data)){

					$_SESSION['success'] = 'Submit Successfull';
					redirect(base_url() . 'main/clearance');
				}
			}
			else{
				//False
				$this->clearance();
			}
	}

	public function admin_clearance(){

		$id = $this->uri->segment(3);
		$data["consti_data1"] = $this->main_model->clearance_datas($id);
    $data["fetch_data1"] = $this->main_model->fetch_data_clearance();
		$this->load->view("admin_clearance", $data);
	}

	public function clearance_data(){

		$id = $this->uri->segment(3);
		$data["consti_data1"] = $this->main_model->clearance_datas($id);
    $data["fetch_data1"] = $this->main_model->fetch_data_clearance();
		$this->load->view("admin_clearance", $data);
	}

	public function rent(){

		$consti_id = $_SESSION['id'];
		$data["fetch_inbox"] = $this->main_model->fetch_inbox($consti_id);
		$data["fetch_data"] = $this->main_model->fetch_unavailable_rent();
		$this->load->view("book_a_rent", $data);
	}

	public function rent_validation(){

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('resources', 'Resources', 'required');
			$this->form_validation->set_rules('purpose', 'Purpose', 'required');
			$this->form_validation->set_rules('hours', 'Hours', 'required');
			$this->form_validation->set_rules('date', 'Date', 'required');

			if($this->form_validation->run()){
				//True
				$name = $_POST['name'];
				$address = $_POST['address'];
				$resources = $_POST['resources'];
				$purpose = $_POST['purpose'];
				$hours = $_POST['hours'];
				$date = $_POST['date'];
				$consti_id = $_SESSION['id'];
				$first_name = $_SESSION['first_name'];
				$last_name = $_SESSION['last_name'];

				$data = array(
					"consti_id"              =>$consti_id,
					"first_name"              =>$first_name,
					"last_name"         =>$last_name,
					"name"            =>$name,
					"address"           =>$address,
					"resources"             =>$resources,
					"purpose"             =>$purpose,
					"hours"         =>$hours,
					"date"            =>$date
				);
				$this->load->model('main_model');
				if($this->main_model->book_a_rent($data)){

					$_SESSION['success'] = 'Submit Successfull';
					redirect(base_url() . 'main/rent');
				}
				else{
					$_SESSION['error'] = 'Book Unavailable';
					redirect(base_url() . "main/rent");
				}
			}
			else{
				//False
				$this->rent();
			}
	}

	public function admin_book_rent(){

		$id = $this->uri->segment(3);
		$data["consti_data"] = $this->main_model->rent_data($id);
    $data["fetch_data"] = $this->main_model->fetch_data_rent();
		$this->load->view("admin_book_rent", $data);
	}

	public function rent_data(){

		$id = $this->uri->segment(3);
		$data["consti_data"] = $this->main_model->rent_data($id);
    $data["fetch_data"] = $this->main_model->fetch_data_rent();
		$this->load->view("admin_book_rent", $data);
	}

	public function admin_rent_approve(){

		$id = $this->uri->segment(3);
		$permit_status = $this->uri->segment(4);
		$this->main_model->rent_status($id, $permit_status);
		$data["consti_data"] = $this->main_model->rent_data($id);
		$data["fetch_data"] = $this->main_model->fetch_data_rent();
		$_SESSION['success'] = 'Status change successfully';
		$this->load->view("admin_book_rent", $data);
	}

	public function rent_response(){

		$this->form_validation->set_rules('response', 'Response', 'required');

		if($this->form_validation->run()){

			$consti_id = $this->uri->segment(3);
			$response = $_POST['response'];
			$type = "Book a Rent";
			$response_data = array(
				"consti_id" => $consti_id,
				"response_type" => $type,
				"response" => $response
			);
			$this->main_model->rent_response($response_data);
			$id = $this->uri->segment(4);
			$data["consti_data"] = $this->main_model->rent_data($id);
    	$data["fetch_data"] = $this->main_model->fetch_data_rent();
			$_SESSION['success'] = 'Message sent successfully';
			$this->load->view("admin_book_rent", $data);

		}else{
			$id = $this->uri->segment(4);
			$data["consti_data"] = $this->main_model->rent_data($id);
    	$data["fetch_data"] = $this->main_model->fetch_data_rent();
			$this->load->view("admin_book_rent", $data);
		}
	}



	public function register(){

		$this->load->view("register_view");
	}

	public function register_validation(){

		$this->form_validation->set_rules('first_name', 'Firstname', 'required');
		$this->form_validation->set_rules('middle_name', 'Middlename', 'required');
		$this->form_validation->set_rules('last_name', 'Lastname', 'required');
		$this->form_validation->set_rules('user_email', 'Email Address', 'required');
		$this->form_validation->set_rules('user_password', 'Password', 'required');
		$this->form_validation->set_rules('user_address', 'Address', 'required');
		$this->form_validation->set_rules('user_age', 'Age', 'required');
		$this->form_validation->set_rules('user_sex', 'Sex', 'required');
		$this->form_validation->set_rules('user_birthday', 'Birthday', 'required');
		$this->form_validation->set_rules('user_civil_status', 'Civil Status', 'required');
		$this->form_validation->set_rules('user_number', 'Cellphone Number', 'required');

		if($this->form_validation->run()){
			//True
			$first_name = $_POST['first_name'];
			$middle_name = $_POST['middle_name'];
			$last_name = $_POST['last_name'];
			$user_email = $_POST['user_email'];
			$user_password = $_POST['user_password'];
			$user_address = $_POST['user_address'];
			$user_age = $_POST['user_age'];
			$user_sex = $_POST['user_sex'];
			$user_birthday = $_POST['user_birthday'];
			$user_civil_status = $_POST['user_civil_status'];
			$user_number = $_POST['user_number'];
			$priveledge = "consti";

			$data = array(
				"first_name"            =>$first_name,
				"middle_name"           =>$middle_name,
				"last_name"             =>$last_name,
				"email"            =>$user_email,
				"password"         =>$user_password,
				"address"          =>$user_address,
				"age"              =>$user_age,
				"sex"              =>$user_sex,
				"birthday"         =>$user_birthday,
				"civil_status"     =>$user_civil_status,
				"number"           =>$user_number,
				"priveledge"				=>$priveledge
			);
			$this->load->model('main_model');
			if($this->main_model->register($data)){

				$_SESSION['success'] = 'Successfully Registered';
				redirect(base_url() . 'main/register');
			}
			else{

				$_SESSION['error1'] = 'Email already registered';
				redirect(base_url() . 'main/register');
			}
		}
		else{
			//False
			$this->register();
		}
	}


}