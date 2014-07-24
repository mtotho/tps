<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tool_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getByFundamentalId($fundamental_id){
		$query="select t.id, t.name, t.description
					from toolkit_tool t
				inner join toolkit_tool2fundamental t2f on t2f.fk_tool_id=t.id 
					where t2f.fk_fundamental_id= ? ";

		$raw = $this->db->query($query, array($fundamental_id));

		return $raw->result_array();
	}

	function updateTool($tool){
		$query ="update toolkit_tool set
					name=?,
					description=?
				where id=?";
		$this->db->query($query, array($tool['name'], $tool['description'], $tool['id']));
	}

	function newTool($tool){
		$query="insert into toolkit_tool set 
					name= ?,
					description = ?
					";
		$this->db->query($query, array($tool['name'], $tool['description']));

		$tool_id = $this->db->insert_id();

		$query2 = "insert into toolkit_tool2fundamental set 
						fk_fundamental_id=?,
						fk_tool_id=?";
		$this->db->query($query2, array($tool['fundamental_id'], $tool_id));

		$tool['id']=$tool_id;

		return $tool;
	}

	function deleteTool($tool_id){
	
		$query = "delete from toolkit_tool2fundamental where fk_tool_id= ?";
		$this->db->query($query, array($tool_id));

		$query2 = "delete from toolkit_tool where id = ?";
		$this->db->query($query2, array($tool_id));
	}

}

?>