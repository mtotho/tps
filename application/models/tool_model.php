<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tool_model extends CI_Model{
	
	protected $tool_query;

	function __construct(){
		parent::__construct();

		$this->tool_query="select t.id, t.name, t.description, t.file_id, file.name as file_name, file.upload_date as upload_date
					from toolkit_tool t
				inner join toolkit_tool2fundamental t2f on t2f.fk_tool_id=t.id 
				left join toolkit_file file on file.id=t.file_id";
	}

	function getByFundamentalId($fundamental_id){
		$query=$this->tool_query." where t2f.fk_fundamental_id= ? ";

		$raw = $this->db->query($query, array($fundamental_id));

		$query2 = "select * from toolkit_fundamental where id = ?";
		$raw2 = $this->db->query($query2, array($fundamental_id));

		$results = array();
		$results['tools'] = $raw->result_array();
		$results['fundamental']=$raw2->row();

		return $results;
	}

	function getById($tool_id){
		$query=$this->tool_query." where t.id= ?";
		$raw=$this->db->query($query, array($tool_id));
		return $raw->row();
	}

	function updateTool($tool){

		$query ="update toolkit_tool set
					name=?,
					description=?
				where id=?";
		$this->db->query($query, array($tool['name'], $tool['description'], $tool['id']));

		
		if(isset($tool['new_file'])){
			$this->load->model("file_model");
			$this->file_model->post_file($tool['new_file'], $tool['id']);
		}
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