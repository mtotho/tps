<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("application/libraries/REST_Controller.php");

class Team extends REST_Controller {


	public function index_get(){
		$this->load->model("team_model");

		$response['teams']=$this->team_model->getTeams();

		$this->response($response);
	}

	public function index_post(){
		$this->load->model("team_model");

		$team = $this->post('team');

		$response['team']=$this->team_model->newTeam($team);

		$this->response($response);
	}	
}