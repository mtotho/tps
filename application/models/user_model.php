<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function newUser($user){
		
		$salt = substr(hash('sha256', rand(100,5000)),3,10);
	
		$hashpass = hash('sha256', hash('sha256', $user['password']).$salt);

		$query = "insert into toolkit_user set 
					email= ?,
					hash_pass = ?,
					salt = ? ";

		$this->db->query($query, array($user['email'], $hashpass, $salt));

	}

	function authenticate($user){
		$dbuser = $this->getUser($user['email']);
		$salt = $dbuser->salt;
		
		$hashpass = hash('sha256', hash('sha256', $user['password']).$salt);

		if($hashpass == $dbuser->hash_pass){
			return 1;
		}else{
			return 0;
		}

	}

	function getUser($email){
		$query = "select * from toolkit_user where email = ?";
		$result = $this->db->query($query, array($email));

		return $result->row();
	}

}

?>