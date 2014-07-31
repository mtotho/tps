<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function upload_file($file,$tool_id=null){

		$filename=$file['name'];
		$tmpname =$file['tmp_name'];
		$type = $file['type'];

		$fp = fopen($tmpname,'r');
		$content = fread($fp, filesize($tmpname));
		$content = addslashes($content);
		fclose($fp);

		if(!get_magic_quotes_gpc()){
   			 $filename = addslashes($filename);
		}

		$query = "insert into toolkit_file set 
					name=?,
					data=?,
					type=?";
		$this->db->query($query, array($filename, $content, $type));

		$file_id = $this->db->insert_id();

		if($tool_id!=null){
			$query2 = "update toolkit_tool set file_id=? where id=?";
			$this->db->query($query2, array($file_id, $tool_id));

		}
	}

	function post_file($file, $tool_id=null){

		//$filedata=addslashes($filedata);
		$query = "insert into toolkit_file set 
					name=?,
					base64=?,
					type=?,
					upload_date=NOW()";

		$this->db->query($query, array($file['name'], $file['base64'], $file['type']));

		$file_id = $this->db->insert_id();

		if($tool_id!=null){
			$query2 = "update toolkit_tool set file_id=? where id=?";
			$this->db->query($query2, array($file_id, $tool_id));

		}
	}

	function download_file($file_id){
		$query = "select * from toolkit_file where id=?";
		$result=$this->db->query($query, array($file_id));
		return $result->row();
	}

}

?>