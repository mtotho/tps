<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cp extends CI_Controller {

	public $jqueryUI = true;
	public $js = array('public/js/cp/cp.js');
	public $data = array(
					"page_title" => "Team Performance Solutions - Control Panel"
					
	);

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('cp/view_cp');
		$this->load->view('template/footer');


	}

	public function toolkit(){
		$this->load->view('template/header');
		$this->load->view('cp/view_cp_toolkit');
		$this->load->view('template/footer');
	}

	public function users(){
		$this->load->view('template/header');
		$this->load->view('cp/view_cp_users');
		$this->load->view('template/footer');
	}
}

/* End of file cp.php */
/* Location: ./application/controllers/cp.php */