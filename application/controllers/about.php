<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller{
	
	public $page = 'about/page/landing';
	public $jqueryUI = false;
	public $data = array(
					"page_title" => "Team Performance Solutions - About US"
					
	);
	
	
	
	public function index(){
		$this->load->view('template/header');
		$this->load->view('about/view_about');
		$this->load->view('template/footer');
	}
	
	public function page($page){
		$this->page = 'about/page/'.$page;	
		$this->index();	
	}
	
	
	
}
?>