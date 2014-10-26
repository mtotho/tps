<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class Fundamental extends REST_Controller {


	public function index_get(){
		
		$this->load->model("fundamental_model");

		$catId=$this->get("cat_id");
		$response['fundamentals']=$this->fundamental_model->getByCategoryId($catId);
		$response['cat_id'] = $catId;
		
		$this->response($response);

	}


	public function index_post(){
		
	}
}