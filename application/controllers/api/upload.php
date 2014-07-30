<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class Upload extends REST_Controller {


	public function index_get(){
	
	}


	public function index_post(){
		$tool_id = $this->post('tool_id');

		$this->load->model('file_model');
		$file = $_FILES['file'];

		$this->file_model->upload_file($file, $tool_id);

	
	}
	
}