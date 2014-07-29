<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class Authentication extends REST_Controller {


	public function index_get(){
		
		
	}


	public function index_post(){
		$this->load->model("user_model");
		$user = $this->post("user");

		$valid = $this->user_model->authenticate($user);

		if($valid==1){
			$response['user']=$user;
			$response['valid']=true;
		}else{
			$response['valid']=false;
		}

		$this->response($response);
	}
}