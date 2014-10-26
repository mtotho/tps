<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function send(){
			
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$title = $this->input->post('title');
		$organization = $this->input->post('organization');		
		$phone = $this->input->post('phone');		
		$email = $this->input->post('email');	
		$message = $this->input->post('message');	
		
		//Validate
		$formValid = true;
		$msg = "Please correct the following fields: \n";
		
		if($fname == ''){
			$formValid=false;
			$msg = $msg."<br />First Name";	
		}
		if($lname == ''){
			$formValid=false;
			$msg = $msg."<br />Last Name";
		}
		if($email == ''){
			$formValid=false;
			$msg = $msg."<br />Email Address";
		}
		if($message == ''){
			$formValid=false;
			$msg = $msg."<br />Message";
		}
		
		if($formValid == false){
			
			$this->session->set_userdata('frmValid_error', $msg);
			header('Location:'.URL.'contact');	
		}else{
			
				
			$emailto = "info@teamperformancesolutions.com";//
			
			$email_from = $emailto;
			$email_subject = "Contact Form Submission";
			$email_body = "You have received a new Contact Form submission\n".
										"Name: $fname $lname.\n".
										"Email: $email \n".
										"Title: $title \n".
										"Organization: $organization \n".
										"Phone: $phone \n\n".
										"Message: $message \n\n".
			                            
			                            
			$to = $emailto;
			$headers = "From: $email_from \r\n";
			$headers .= "Reply-To: $email \r\n";
			mail($to,$email_subject,$email_body,$headers);
			
			header('Location:'.URL.'contact/sent');  				
			
		}
		
		
		
	}
	
	public function sent(){
		$this->load->view('template/header');
		$this->load->view('contact/email_sent.php');
		$this->load->view('template/footer');
	}
}
