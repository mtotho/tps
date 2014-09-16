<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	public $jqueryUI = true;
	public $js = array('public/js/toolkit/registration.js');
	public $data = array(
					"page_title" => "Team Performance Solutions - Registration"
					
	);

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('toolkit/view_registration');
		$this->load->view('template/footer');


	}

}

/* End of file cp.php */
/* Location: ./application/controllers/cp.php */