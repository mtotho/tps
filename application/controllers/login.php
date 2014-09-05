<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	
	public $data = array(
					"page_title" => "Team Performance Solutions - Login"
					
	);
	
	
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('view_login');
		$this->load->view('template/footer');
	}
	
}
?>