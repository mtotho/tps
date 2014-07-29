<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class User extends REST_Controller {


	public function index_get(){
		
		
	}

	public function index_post(){
		$this->load->model("user_model");
		$user = $this->post("user");

		$this->user_model->newUser($user);

	}
}