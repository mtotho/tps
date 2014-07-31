<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class Upload extends REST_Controller {


	public function index_get(){
		$file_id=$this->get("file_id");

		$this->load->model('file_model');
		$file = $this->file_model->download_file($file_id);
		//error_log($file->data);
		$this->response($file);
	}


	public function index_post(){
		$tool_id = $this->post('tool_id');

		$this->load->model('file_model');
		$file = $_FILES['file'];
		error_log(print_r($file,true));
		$this->file_model->upload_file($file, $tool_id);

	
	}
	
}