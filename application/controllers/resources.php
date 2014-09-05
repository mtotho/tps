<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resources extends CI_Controller{
	
	public $page = 'resources/resources_landing';
	public $msg = 'test';
	public $jqueryUI = false;
	public $data = array(
					"page_title" => "Team Performance Solutions - Resources"
					
	);
	
	public $js = array('public/js/resources/resources.js');
	
	public function index(){
		$this->load->view('template/header');
		$this->load->view('resources/view_resources');
		$this->load->view('template/footer');
	}
	
	public function page($page){
		$this->page = 'resources/'.$page;	
		$this->index();	
	}
	
	
}
?>