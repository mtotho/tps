<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function upload_file($file,$tool_id=null){

		$filename=$file['name'];
		$tmpname =$file['tmp_name'];
		$type = $file['type'];
		$size = $file['size'];




		$fp = fopen($tmpname,'r');
		$content = fread($fp, filesize($tmpname));
		//$content = addslashes($content);
		fclose($fp);
		//error_log($content);
		//if(!get_magic_quotes_gpc()){
   			// $filename = addslashes($filename);
		//}

		//Check to see if file already exists
		$query = "select * from toolkit_file where name=?";
		$result = $this->db->query($query,array($filename));
		
		$content_md5=md5($content);
		$file_id=null;
		if($result->num_rows()>0){
			$results = $result->result_array();
			foreach($results as $matching_file){
				if($content_md5==md5($matching_file['data'])){
					$file_id=$matching_file['id'];
					break;
				}
				
			}
		}

		if($file_id==null){
			$query = "insert into toolkit_file set 
						name=?,
						data=?,
						type=?,
						size=?,
						upload_date=NOW()";
			$this->db->query($query, array($filename,$content, $type, $size));

			$file_id = $this->db->insert_id();
		}



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

	function logDownload($user, $file_id){
		$this->load->model("user_model");
		$dbuser = $this->user_model->getUser($user['email']);

		$query = "insert into toolkit_download_log set 
					fk_toolkit_file_id=?,
					fk_user_id=?,
					timestamp = NOW()";
		$this->db->query($query, array($file_id, $dbuser->id));
	}

	function getDownloadLog(){

		$query = "select tf.name as file_name, tu.email as user_email, tdl.timestamp from toolkit_download_log tdl 
					inner join toolkit_file tf on tf.id=tdl.fk_toolkit_file_id
					inner join toolkit_user tu on tu.id=tdl.fk_user_id
					order by timestamp desc";

		$results = $this->db->query($query);

		return $results->result_array();
	}

}

?>