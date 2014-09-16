<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class Membership extends REST_Controller {


	public function index_get(){
		
		
	}

	//validate credentials
	public function index_post(){
		$this->load->model("membership_model");
		$membership = $this->post("membership");

		$response['membership'] = $this->membership_model->newMembership($membership);

		$this->response($response);
	}
}