<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class User extends REST_Controller {


	public function index_get(){
		$this->load->model("user_model");

		$adminuser['email']=$this->get('auth_email');
		$adminuser['token']=$this->get('auth_token');

		$auth = $this->user_model->authenticate($adminuser);

		if($auth['valid']==1){
			$users = $this->user_model->getUsers();
			$response["users"]=$users;
		}else{
			$response['status']=$auth['status'];
		}
	
		$this->response($response);
	}

	public function index_post(){
		$this->load->model("user_model");
		$user = $this->post("user");

		$response['user'] = $this->user_model->newUser($user);
		$this->response($response);
	}	

	public function index_put(){
		$this->load->model("user_model");
		$user = $this->put("user");

		$response['user']=$this->user_model->updateUser($user);

		$this->response($response);
	}
}