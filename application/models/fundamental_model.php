<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fundamental_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getByCategoryId($catId){
		$query="select id, name, description, short_description, fk_category_id as category_id
					from toolkit_fundamental where fk_category_id= ?";
		$raw = $this->db->query($query, array($catId));

		return $raw->result_array();
	}


}

?>