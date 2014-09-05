<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller{
	
	public $js = array('public/js/download/download.js');
	public $jqueryUI = false;
	public $formSelected;
	public $data = array(
					"page_title" => "Team Performance Solutions - Downloads"
					
	);
	
	
	public function index(){
		
		
		
		$download = $this->input->get('download');
		$pagedata['download']= $download;
		
		$this->load->view('template/header');
		
		//If any email session is set. I.E, user logged in or filled out form
		if($this->session->userdata('email')){
			$email = $this->session->userdata('email');
			
			//Paths
			//-1:Check 'valid' session variable to see if they are logged in. Immediate download.
			if($this->session->userdata('valid')==1){
				//Download file
				//echo $download;
				$this->Download_model->FileDownload($download, $email);
				
			//-2:Not valid, check if email is in download table	
			}else{
			
			//	$isInTable = $this->download_model->isInTable($email);
				$isInTable = $this->Download_model->isInTable($email);
				
				//Email is in the download/visitor table , download the file
				if($isInTable == 1){
					//Download file
					$this->Download_model->FileDownload($download, $email);
				
				//Email is not in table, send to the current screen	
				}else{
					$this->load->view('download/view_download', $pagedata);
				}//end else
			}//end else
			
			
		//Not email session set, send to the current screen
		}else{		
			$this->load->view('download/view_download', $pagedata);
		}
				
		
		$this->load->view('template/footer');
	}
	

		
	public function form($form){
		$this->formSelected = $this->load->view('download/'.$form.'.php','', true);
		$this->index();
	}
	
	public function checkEmail(){
		
		$download = $this->input->post('download');
		$email = $this->input->post('email');
		
		$isInTable = $this->Download_model->isInTable($email);
		
		//Email is in table, download file
		if($isInTable==1){
			$this->Download_model->FileDownload($download, $email);
		
		//Not in table, throw error
		}else{
			$msg = "That email isn't in the database. Please go back and select 'first time'";
			echo $msg;
		}	
	}//end checkEmail()
	
	public function firstTime(){
		
		$this->Download_model->FileDownloadFirstTime();
		
	}
}
?>