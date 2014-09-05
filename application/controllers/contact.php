<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller{
	
	public $js = array('public/js/contact/form_validation.js',
					   'public/js/contact/contact.js'
						);
	public $jqueryUI = false;
	public $data = array(
					"page_title" => "Team Performance Solutions - Contact US"
					
	);
	
	public function index(){
		$this->load->view('template/header');
		$this->load->view('contact/view_contact');
		$this->load->view('template/footer');
	}
	
	public function send(){
		$this->load->model('Contact_model');
		$this->Contact_model->send();
	}
	
	public function sent(){
		$this->load->model('Contact_model');
		$this->Contact_model->sent();
	}
	
}
?>