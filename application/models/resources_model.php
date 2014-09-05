<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resources_model extends CI_Model{
	
	
	public $dashboard_controller; //represents the dashboard controller (assumes this model is loaded from dashboard method)
	
	function __construct(){
		parent::__construct();
		$this->dashboard_controller=  & get_instance();
	}
	
	//view()
	public function view($view, $data=null){
	//Call Stack(Origin->Recent):
			//1-LINK REL URL'/dashboard/resources/view/<arg>' => CALLS METHOD 'resources()' IN CONTROLLER 'dashboard' WITH ARGS 'view',<arg>	
			//2-METHOD 'resources()' IN CONTROLLER 'dashboard' CALLS METHOD 'view()' IN MODEL 'resources_model' WITH ARG $view=<arg> 
				
	//Function: Call setContent() method in dashboard controller in order to change the view of the dashboard to the indicated view			
		$this->dashboard_controller->setContent('dashboard/resources/'.$view, $data);
		
	}//end: view()
	
	public function addArticleType(){
		
		$article_type = $this->input->post('txtNewArticleType');
		$user         = $this->session->userdata('email');
		$date         = date("F j, Y, g:i a");
		
		$query = "INSERT INTO resource_ArticleTypes (article_type, user, date)
				  							 VALUES ('$article_type','$user','$date');";
											 
		$this->db->query($query);
		
		header('Location:'.URL.'dashboard/resources/view/article_types');									 
		
	}
	
	public function deleteArticleType(){
		
		$article_type = $this->input->post('DeleteTypeDD');
		
		$query = "DELETE FROM resource_ArticleTypes
				  WHERE article_type = '$article_type';";
				  
		$this->db->query($query);
		
		header('Location:'.URL.'dashboard/resources/view/article_types');		  
		
	}
	
	public function deleteArticle(){
		
		$article = $this->input->post('DeleteArticleDD');
		
	
	}

	//addJournalArticle()
	public function addJournalArticle(){
		//Call Stack(Origin->Recent):
			//1-FORM SUBMISSION 'frmAddJournalArticle' @ REL URL '/dashboard/resources/resourceType/frmAddJournalArticle'  
			//2-FORM ACTION REL URL'/dashboard/resources/addJournalArticle' => CALLS METHOD 'resources()' IN CONTROLLER 'dashboard' WITH ARG 'addJournalArticle'
			//3-METHOD 'resources()' IN CONTROLLER 'dashboard' CALLS METHOD 'addJournalArticle()' IN MODEL 'resources_model' 
			
		//===
		//addJournalArticle()
		//ADD INPUT FROM FORM TO DATABASE
		//===	
			
			$article_type  = $this->input->post('ddArticleType');
			$author_string = $this->input->post('txtAuthors');
			$year          = $this->input->post('txtYear');
			$title         = str_replace("'", "\'", $this->input->post('txtTitle'));
			$download_file = $this->input->post('selectedFile');
			$download_url  = $this->input->post('txtFileURL');
			$description   = $this->input->post('txtDescription');
			$user          = $this->session->userdata('email');
			$date          = date("F j, Y, g:i a");
			
			$description = str_replace("'", "\'", $description);
			
			$citation_definition = $this->input->post('rdoCitation');
			
			if($citation_definition == "generic"){
				
				$generic_SecondaryAuthor = $this->input->post('txtGenericInSecondaryAuthor');
				$generic_SecondaryTitle  = $this->input->post('txtGenericSecondaryTitle');
				$generic_Edition 		 = $this->input->post('txtGenericEdition');
				$generic_Volume 		 = $this->input->post('txtGenericVolume');
				$generic_Pages		     = $this->input->post('txtGenericPages');
				$generic_PublishLocation = $this->input->post('txtGenericPlacePublished');
				$generic_Publisher		 = $this->input->post('txtGenericPublisher');
				
				$query = "INSERT INTO resource_journalArticles 
						(article_type, citation_definition, author_string, year, title, generic_SecondaryAuthor, generic_SecondaryTitle, 
						generic_Edition, generic_Volume, generic_Pages, generic_PublishLocation, generic_Publisher, download_file, user, date, fileURL, description)
						VALUES
						('$article_type', '$citation_definition', '$author_string','$year','$title','$generic_SecondaryAuthor','$generic_SecondaryTitle',
						'$generic_Edition','$generic_Volume','$generic_Pages','$generic_PublishLocation','$generic_Publisher','$download_file', '$user', '$date', '$download_url', '$description');";
				
			}elseif($citation_definition == "journal"){
				
				$journal_title  = $this->input->post('txtJournalTitle');
				$journal_volume = $this->input->post('txtJournalVolume');
				$journal_issue  = $this->input->post('txtJournalIssue');
				
				$journal_pages  = $this->input->post('txtJournalPages');
				
				$query = "INSERT INTO resource_journalArticles 
						(article_type, citation_definition, author_string, year, title, journal_title, journal_volume, 
						journal_issue, journal_pages, download_file, user, date, fileURL, description)
						VALUES
						('$article_type', '$citation_definition', '$author_string','$year','$title','$journal_title', '$journal_volume',
						'$journal_issue','$journal_pages','$download_file', '$user', '$date', '$download_url', '$description');";
				
			}
			// /chapter_10_Wolff,_Druskat,_Stubbs,_Messer.formatted2_1.pdf
			$this->db->query($query);
			
			header('Location:'.URL.'dashboard/resources/view/addResourceLanding');
			
	}
	
	public function modifyResource($type, $resourceID){
		
		$query = "SELECT*FROM resource_journalArticles WHERE id='$resourceID';";
		$query = $this->db->query($query);
		$article = $query->result_array();
		
		switch($type){
			
			case "article":
				$this->view('frmModifyJournalArticle', $article[0]);
				break;
			
		}

	}

	public function modifyResourceDo(){
		$article_type  = $this->input->post('ddArticleType');
		$author_string = $this->input->post('txtAuthors');
		$year          = $this->input->post('txtYear');
		$title         = str_replace("'", "\'", $this->input->post('txtTitle'));
		$download_file = $this->input->post('selectedFile');
		$download_url  = $this->input->post('txtFileURL');
		$description   = $this->input->post('txtDescription');
		$user          = $this->session->userdata('email');
		$date          = date("F j, Y, g:i a");	
		$ArticleID     = $this->input->post('ArticleID');
		
		$description = str_replace("'", "\'", $description);
		
		
		$generic_SecondaryAuthor = $this->input->post('txtGenericInSecondaryAuthor');
		$generic_SecondaryTitle  = $this->input->post('txtGenericSecondaryTitle');
		$generic_Edition 		 = $this->input->post('txtGenericEdition');
		$generic_Volume 		 = $this->input->post('txtGenericVolume');
		$generic_Pages		     = $this->input->post('txtGenericPages');
		$generic_PublishLocation = $this->input->post('txtGenericPlacePublished');
		$generic_Publisher		 = $this->input->post('txtGenericPublisher');

		$journal_title  = $this->input->post('txtJournalTitle');
		$journal_volume = $this->input->post('txtJournalVolume');
		$journal_issue  = $this->input->post('txtJournalIssue');
		$journal_pages  = $this->input->post('txtJournalPages');
		
		$citation_definition = $this->input->post('rdoCitation');
		
		$query = "UPDATE resource_journalArticles
				  SET article_type = '$article_type', citation_definition = '$citation_definition', author_string = '$author_string',
				      year = '$year', title = '$title', generic_SecondaryAuthor = '$generic_SecondaryAuthor', generic_SecondaryTitle = '$generic_SecondaryTitle',
				      generic_Edition = '$generic_Edition', generic_Volume = '$generic_Volume', generic_Pages = '$generic_Pages', generic_PublishLocation = '$generic_PublishLocation',
				      generic_Publisher = '$generic_Publisher', journal_title = '$journal_title', journal_volume = '$journal_volume', journal_issue = '$journal_issue',
				      journal_pages = '$journal_pages', download_file = '$download_file', fileURL = '$download_url', description = '$description'
				  WHERE id = '$ArticleID';";
				  
		$this->db->query($query);
		
		header('Location:'.URL.'dashboard/resources/view/view_ModifyResource');		  	
	}
	
	public function changeArticleTypeOrder(){
				
		$ids = $this->input->post('ids');		
		foreach($ids as $id){
			
			$order = $this->input->post('order_'.$id);
			
		
			$query = "UPDATE `resource_ArticleTypes` SET `order`=$order WHERE `id`=$id";
			$this->db->query($query);
		}
		
		header('Location:'.URL.'dashboard/resources/view/article_types');
	}
	
	public function ajaxArticleDelete(){
		
		$articleID = $this->input->post('id');
	
		$query = "DELETE FROM resource_journalArticles
				  WHERE id = '$articleID';";
				  
		$this->db->query($query);
		
		//header('Location:'.URL.'dashboard/resources/view/addResourceLanding');			  
		
	}
}
