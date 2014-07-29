<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class Fundamental extends REST_Controller {


	public function index_get(){
		
		$this->load->model("fundamental_model");

		$catId=$this->get("cat_id");
		$fundamentals=$this->fundamental_model->getByCategoryId($catId);
		$this->response($fundamentals);
	}


	public function index_post(){
		
	}
}