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

        // $this->login();
        // $this->register();

        $this->load->view("home");

    }

    public function login(){
        $this->load->view("login_view");
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

                $session_data = array(
                    'email'  =>  $user_email
                );
                $this->session->set_userdata($session_data);
                redirect(base_url() . 'main/enter');
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

    public function enter(){

        if($this->session->userdata('email') != ''){
            
            echo '<h2>Welcome ' .$this->session->userdata('email'). '</h2>';
            echo '<a href="' .base_url(). 'main/logout">Logout</a>';
        }
        else{

            redirect(base_url());
        }
    }

    public function logout(){

        $this->session->unset_userdata('username');
        redirect(base_url() . 'main/login');
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
                "number"           =>$user_number
            );
            $this->load->model('main_model');
            if($this->main_model->register($data)){

                $_SESSION['success'] = 'Successfully Registered';
                redirect(base_url() . 'main/register');
            }
            else{

                $_SESSION['error'] = 'Email already registered';
                redirect(base_url() . 'main/register');
            }
        }
        else{
            //False
            $this->register();
        }
    }


}