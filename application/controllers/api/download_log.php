<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class Download_log extends REST_Controller {


	public function index_get(){
		$this->load->model("file_model");

		$response['log'] = $this->file_model->getDownloadLog();	

		$this->response($response);
	}


	public function index_post(){
		$this->load->model("file_model");
		$user = $this->post("user");
		$file_id = $this->post("file_id");

		$this->file_model->logDownload($user, $file_id);


		//$response['user'] = $this->user_model->authenticate($user);

		$this->response("Success");
	}
}