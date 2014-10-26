<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getTeams(){
		$query = "select t.id, name, t.fk_toolkit_membership_id as toolkit_membership_id, u.email as leader from toolkit_team t
					inner join toolkit_user u on u.id=t.leader";

		$results = $this->db->query($query);

		return $results->result_array();
	}

	function newTeam($team){
		$this->load->model("user_model");

		$leader_email = $team['leader'];
		$leader = $this->user_model->getUser($leader_email);

		$query = "insert into toolkit_team set 
						name=?,
						fk_toolkit_membership_id=?,
						leader = ?
						";
		$this->db->query($query, array($team['name'], 0, $leader->id));

		$team['id']=$this->db->insert_id();
		return $team;
	}

	function updateTeamMembership($team_id, $membership_id){
		$query = "update toolkit_team 
					set fk_toolkit_membership_id = ?
				    where id=?";
		$this->db->query($query, array($membership_id, $team_id));
	}

}
