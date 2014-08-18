<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Toolkit extends CI_Controller {

	public $jqueryUI = true;
	public $js = array('public/js/toolkit/toolkit.js');
	public $data = array(
					"page_title" => "Team Performance Solutions - Team Development Toolkit"
					
	);

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('toolkit/view_tool_landing');
		$this->load->view('template/footer');
	}

	public function tools($fundamental=null)
	{	
		

		if($fundamental==null){
			$this->load->view('template/header');
			$this->load->view('toolkit/view_toolkit');
		}else{
			$this->js[0]="public/js/toolkit/ToolHandler.js";
			//$this->js[]="public/js/toolki"
			$this->load->view('template/header');
			$data['fundamental']=$fundamental;
			$this->load->view('toolkit/view_fundamental',$data);
		}
		$this->load->view('template/footer');
	}




}

/* End of file toolkit.php */
/* Location: ./application/controllers/toolkit.php */