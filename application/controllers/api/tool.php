<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class Tool extends REST_Controller {


	public function index_get(){
		
		$this->load->model("tool_model");

		$fundamental_id=$this->get("fundamental_id");

		$tools=$this->tool_model->getByFundamentalId($fundamental_id);
		$this->response($tools);
	}


	public function index_post(){
		
		$this->load->model("tool_model");

		$tool = $this->post("tool");

		$new_tool = $this->tool_model->newTool($tool);
//
		//error_log(print_r($tool, true));
		//print_r($tool);
		//$toolname=$tool['name'];
		//$tooldescription=$tool['description'];
		//$fundamental_id =$tool['fundamental_id'];
//		
		$this->response($new_tool);
	}

	public function index_put(){
		$this->load->model("tool_model");

		$tool=$this->put("tool");

		
		//error_log(print_r($tool,true));
		$this->tool_model->updateTool($tool);

		$updated_tool = $this->tool_model->getById($tool['id']);

		$this->response($updated_tool);

	}

	public function index_delete(){
		//error_log("delete");
		$this->load->model("tool_model");
		$tool_id=$this->input->get("tool_id");
		
		//$tool_id=$this->post("tool_id");

		//error_log($tool_id);
		$this->tool_model->deleteTool($tool_id);

		$this->response($tool_id);

	}
}