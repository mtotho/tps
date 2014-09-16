<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membership_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function newMembership($membership){
		$this->load->model("team_model");

		$query = "insert into toolkit_membership set 
					qty_license = ?,
					qty_license_remain = ?,
					contact_fname = ?,
					contact_lname = ?,
					contact_phone = ?,
					payment_type = ?";

		$this->db->query($query, 
			array($membership['qty_license'], $membership['qty_license'], $membership['contact_fname'],
				  $membership['contact_lname'], $membership['contact_phone'], $membership['payment_type']));

		$membership['id']=$this->db->insert_id();

		$this->team_model->updateTeamMembership($membership['team_id'],$membership['id']);

		return $membership;
	}

}
