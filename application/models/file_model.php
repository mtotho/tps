<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function upload_file($file,$tool_id=null){

		$filename=$file['name'];
		$tmpname =$file['tmp_name'];

		$fp = fopen($tmpname,'r');
		$content = fread($fp, filesize($tmpname));
		$content = addslashes($content);
		fclose($fp);

		if(!get_magic_quotes_gpc()){
   			 $filename = addslashes($filename);
		}

		$query = "insert into toolkit_file set 
					name=?,
					data=?";
		$this->db->query($query, array($filename, $content));

		$file_id = $this->db->insert_id();

		if($tool_id!=null){
			$query2 = "update toolkit_tool set file_id=? where id=?";
			$this->db->query($query2, array($file_id, $tool_id));

		}
	}

}

?>