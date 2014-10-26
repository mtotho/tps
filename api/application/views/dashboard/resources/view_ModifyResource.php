<h3>Modify Resources</h3>	

<br />
<p>Click on a Resource type below, then click on a resource to modify</p>
<div id="accordion">
	<h3><a href="#">Journal Articles</a></h3>
	<div>
		<table>
			<tr>
				<th>Title</th>
				<th>Article Type</th>
				<th>Authors</th>
			</tr>
	
		<?php
			
			$query = "SELECT*FROM resource_journalArticles";
			$query = $this->db->query($query);
			
			$articles = $query->result();
			
			foreach($articles as $article){
				?>	
				
				<tr>
					<td><a href="<?php echo URL."dashboard/resources/modifyResource/article/$article->id" ?>"><?php echo $article->title?><a/></td>
					<td><?php echo $article->article_type?></td>
					<td><?php echo $article->author_string ?></td>
	
				</tr>
			
				<?php
			}
		
		?>
	
		</table>	
	</div>
	
	<h3><a href="#">Books</a></h3>
	<div>Book Content</div>
</div>	



	
	