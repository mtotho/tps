<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	public function readTable($table){
		
		$query = "SELECT*FROM $table";
		$query = $this->db->query($query);
		
		return $query->result();
	}
	
	public function upload(){
		
		$config['upload_path'] = 'public/downloads/';
		$config['allowed_types'] = 'gif|ppt|pptx|jpg|png|pdf|docx|doc|*|';
		$config['max_size'] = '5000'; 
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		
		$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload()){
			$msg = "There was an error, try again";	
			echo $this->upload->display_errors();
		}else{
				
			//File Successfully uploaded, add information to database
			$filedata= $this->upload->data();
			
			$filename = $filedata['file_name'];
			$uploader = $this->session->userdata('email');
			$date     = date("F j, Y, g:i a");
			
			$query = "INSERT INTO downloads_files (filename, uploader, date)
											VALUES('$filename', '$uploader', '$date');";
											
			$this->db->query($query);								
				
			$msg = "The file has been uploaded";
		}
	
		return $msg;
	}
	
	public function FileDownloadFirstTime(){
		
		$fname        = $this->input->post('fname');
		$lname 		  = $this->input->post('lname');
		$title 		  = $this->input->post('title');
		$organization = $this->input->post('organization');
		$phone 		  = $this->input->post('phone');
		$email 	      = $this->input->post('email');
		$download     = $this->input->post('download');
		
		if($email == ''){
				
			$this->session->set_userdata('frmValid_error', "Please enter an email address");
			header('Location:'.URL.'download/?download='.$download);
			
		}else{
		
			$date = date("F j, Y, g:i a");
			
			
			$query = "INSERT INTO download_userInfo (email, fname, lname, title, organization, phone)
											VALUES  ('$email', '$fname', '$lname', '$title', '$organization', '$phone');";
			
			$query = $this->db->query($query);
			
						
			$this->FileDownload($download, $email);	
										
		}
	}

	//isNewVisitor(email): Checks if the email address is in the database of previous visitors
	public function isInTable($email=null)
	{
		//Check for other paramaters
		if($email==null){
			
			//Check Post
			if($this->input->post('email')!=0){
				$email = $this->input->post('email');
				
			//Check session
			}else if($this->session->userdata('email')){
				$email = $this->session->userdata('email');
			}else{
				return 0;
			}//end else
		}//end if
	
		//Create query to search the table for the email
		$query = "SELECT*FROM download_userInfo WHERE email = '".$email."'";
		$query = $this->db->query($query);
		
		//return 1 (true) if there is more than 0 results
		if($query->num_rows()>0){
			return 1;	
		}else{
			return 0;
		}
	}//end: isNewVisitor()
	
	/*
	public function FileDownloadCheckEmail(){
		
		$download = $this->input->post('download');
		$email    = $this->input->post('email');
		
		if($email == ''){
			
			$this->session->set_userdata('frmValid_error', "Please enter an email address");
			header('Location:'.URL.'download/?download='.$download);
			
		}else{
			
			$date = date("F j, Y, g:i a");
			
			$query = "SELECT*FROM download_userInfo WHERE email = '$email';";
			$query = $this->db->query($query);
			
			//Email is in database
			if($query->num_rows()>0){
					
				$query2 = "INSERT INTO downloads (email, file, date)
										VALUES   ('$email', '$download', '$date');";
										
				$query2 = $this->db->query($query2);						
				
				//Download the file
				$this->FileDownload($download);
				
			}else{
				
				$this->session->set_userdata('frmValid_error', "Sorry, that email is not in the database");	
				header('Location:'.URL.'download/?download='.$download);
			}
		}
	}
	*/
		
	public function FileDownload($download, $email){
		
		
		$date = date("F j, Y, g:i a");
		
		//Add to database to keep track
		$query = "INSERT INTO downloads (email, file, date)
									VALUES   ('$email', '$download', '$date');";
									
		$query = $this->db->query($query);	
		
		//Reset email session
		$this->session->unset_userdata('email');
		$userdata['email']=$email;
		$this->session->set_userdata($userdata);
		
		//Direct to download url (need to actually authenticate this)		
		$downloadURL = URL."public/downloads/".$download;
		
		$fileType = explode('.', $download);
		$fileType = end($fileType);
		
		if($fileType == 'pdf'){
			
			header('Content-Transfer-Encoding: binary');  // For Gecko browsers mainly
			header('Accept-Ranges: bytes');  // For download resume
			header('Content-Encoding: none');
			header('Content-Type: application/pdf');  // Change this mime type if the file is not PDF
			header('Content-Disposition: attachment; filename=' . $download);
			readfile($downloadURL);
		}else{
			
			header("Location:".$downloadURL);
			
		}
		
	}//end: Filedownload()
	

}