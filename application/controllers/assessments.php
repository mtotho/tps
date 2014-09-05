<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assessments extends CI_Controller{
	
	public $page = "assessments/landing_assessments";
	public $js = array('public/js/assessments/default.js');
	public $jqueryUI = false;
	public $data = array(
					"page_title" => "Team Performance Solutions - Assessmments"
					
	);
	
	public function index(){
		$this->load->view('template/header');
		$this->load->view('assessments/view_assessments');
		$this->load->view('template/footer');
	}
	
	public function page($page,$mod=null){
		//Updates the page variable
		switch($mod){
			case null: //If there is no second argument
				$this->page = 'assessments/'.$page;	 
				break;
			default:   //Otherwise page is a service, set service variable to the second arguement
				$this->page = 'assessments/'.$mod;
				break;		
		}//end: switch
		$this->index();	
	}

}
?>