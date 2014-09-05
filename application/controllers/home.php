<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	
	//public $js = array('public/js/home/fadeslideshow.js',
					//   'public/js/home/slideshowconfig.js'
				//		);
	
	public $data = array(
					"page_title" => "Team Performance Solutions - Harnessing the Power of Teams"
					
	);
	
	
	public $jqueryUI = false;
	
	public function index(){
		$this->load->model('News_model');
		
		$this->load->view('template/header');
		$this->load->view('home/view_home');
		$this->load->view('template/footer');
	}
	
}
?>