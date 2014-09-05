<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Dashboard extends CI_Controller{

	

	public $js = array();

	public $content = 'dashboard/view_help';

	public $jqueryUI = false;

	public $data = array(

					"page_title" => "TPS - Dashboard"				

	);

	

	public $page_data;

	

	public function index(){

		

		//Check if logged in

		if($this->session->userdata('valid')==1){

			$this->load->view('template/header');

			$this->load->view('dashboard/view_dashboard');

			$this->load->view('template/footer');	

		}else{

			$this->login();

		}

	}

	

	//Change the content variable (loaded on the page)

	public function setContent($content, $data=null){

		$this->content = $content;

		$this->page_data = $data;

		$this->index();

		

	}//end:setContent()

	

	//DownloadTable(): load view of download table

	public function DownloadTable(){

		

		array_push($this->js, 'public/js/dashboard/dashboard_downloads.js');

	

		$this->setContent('dashboard/downloads/view_DownloadTable');

		

	}//end: DownloadTable()

	

	public function ViewDownloads(){

			

		

		$this->setContent('dashboard/downloads/view_allDownloads');	

	}

	

	public function upload($posted = null){

		

		if($posted == "uploading"){

			$this->load->model('Download_model');

			echo $this->Download_model->upload();

		}

		$this->setContent('dashboard/downloads/view_upload');

		

		

	}

	

	

	//Load form to add resource to resources section

	public function resources($resourceModelMethod, $resourceModelArg = null, $resourceModelArg2=null){

		

		$this->jqueryUI = true;

		

		//Add javascript for this page

		array_push($this->js, 'public/js/dashboard/dashboard_resources.js');

		

		//Load Download Model for file associations

		$this->load->model('Download_model');

		

		//Load Resources_model to make use of its methods

		$this->load->model('Resources_model');

		

		//Call the Resources_model method indicated by the first required parameter of this function, passing optional parameter

		$this->Resources_model->$resourceModelMethod($resourceModelArg, $resourceModelArg2);	

			

			//$this->setContent('dashboard/resources/view_resourcesDash');

			

		

	}//end: addResource()

	

	//news: Loads the model and sets view for news section

	public function news($newsModelMethod, $newsModelArg = null){

		

		//Add javascript for this page

		array_push($this->js, 'public/js/dashboard/dashboard_news.js');

		

		//Load the model
		$this->load->model('News_model');

		//Call the news model with the method indicated by the argument of this function
		$this->News_model->$newsModelMethod($newsModelArg);

	

		

	}//emd: news()

	

	//Loads login view

	public function login(){

		$this->Login_model->login();	

	

	}//end: login()

	

	//Logic for logging in

	public function loginDo(){

		$this->Login_model->loginDo();	

	

	}//end: loginDo()

	

	//Logout and destroy session data

	public function logout(){

		$this->Login_model->logout();

	

	}//end: logout()

	

	//loads register view

	public function register(){

		$this->Login_model->register();	

	}//end: register();

	

	//Logic for registering

	public function registerDo(){

	

		$this->Login_model->registerDo();

	}//end: registerDo()

}

?>