<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller{
	
	public $page = 'services/landing';
	public $service;
	public $jqueryUI = false;
	public $data = array(
					"page_title" => "Team Performance Solutions - Services"				
	);
	
	
	public function index(){
		$this->load->view('template/header');
		$this->load->view('services/view_services');
		$this->load->view('template/footer');
	}
	
	public function page($page,$mod=null){
		//Updates the page variable
		
		switch($mod){
			case null: //If there is no second argument
				$this->page = 'services/'.$page;	 
				break;
			case "bio"://If second arguement is "bio", route to the bio views
				$this->page = 'about/page/'.$page;
				break;
			default:   //Otherwise page is a service, set service variable to the second arguement
				$this->page = 'services/'.$page;
				$this->service = $mod;
				break;		
		}//end: switch
		$this->index();	
	}
}
?>