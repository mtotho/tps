<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function login(){
		//Open view to login form
		$this->load->view('template/header');
		$this->load->view('dashboard/forms/frmLogin');
		$this->load->view('template/footer');
	}
	
	public function loginDo(){
		//Check login against database
		$email        = $this->input->post('txtEmail');
		$password  	  = $this->input->post('txtPassword');
		
		//Clean email & pass
		//$email    = mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);
		
		//Create query and execute
		$query = "SELECT password, salt FROM users WHERE email = '$email';";
		$query = $this->db->query($query);
		
		//Analyze result
		if($query->num_rows()< 1){
			//No such user exists, pop them back to login screen
			header('Location:'.URL.'dashboard/login');
		}
		
		//Grab the password and salt and store in userData
		$userData = $query->result_array();
		$userData = $userData[0];
		
		//Concatenate the salt with hashed (entered)password, then hash
		$hash = hash('sha256', $userData['salt'].hash('sha256', $password));
		
		//Test against password entered
		if($hash != $userData['password']){
			header('Location:'.URL.'dashboard/login');
		}
		
		//Login was successful, set Session
		$this->setSession($email);
		
		//change location to dashboard
		header('Location:'.URL.'dashboard');
	}	
	
	public function logout(){
		
		$unset = array(
				'email' => '',
				'valid' => 0
				);
		
		$this->session->unset_userdata($unset);
		
		header('Location:'.URL);
	}
	
	public function register(){
		$this->load->view('template/header');
		$this->load->view('dashboard/forms/frmRegister');
		$this->load->view('template/footer');
	}
	
	public function registerDo(){
		//Add to database
		$email        = $this->input->post('txtEmail');
		$password  	  = $this->input->post('txtPassword');
		$TPS_Password = $this->input->post('txtTPSPASS');
		
		//Check tps password
		if($TPS_Password != "tps12345"){
			header('Location: dashboard/register');
		}
		
		//Salt + Sha method
		//Create 64-bit hashed string from password. Pretty secure but can still be bruted
		$hash = hash('sha256', $password);
		
		//Create a random 3 character sequence, 'salt'
		$salt = $this->createSalt();
		
		//Concatenate hashed password with salt and re-hash
		$hash = hash('sha256', $salt.$hash);
		
		//Clean email & tps pass
		$email        = mysql_real_escape_string($email);
		$TPS_Password = mysql_real_escape_string($TPS_Password);
		
		//Create database query and execute
		$query = "INSERT INTO users (email, password, salt)
				 			VALUES  ('$email', '$hash', '$salt');";
		
		$this->db->query($query);
		
		//Authenticate user
		$this->setSession($email);
		
		//Change the page to dashboard home
		header('Location: '.URL.'dashboard/');	
	}

	protected function createSalt(){
		$string = md5(uniqid(rand(), true));
		return substr($string, 0, 3);
	}
	
	public function setSession($email){
		
		$userdata = array(
					'valid'=>1,
					'email'=>$email,
					);		
		
		$this->session->set_userdata($userdata);
		
	}
}
