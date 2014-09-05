<h3>Article Types</h3>

<br />

<p>These are the categories that articles can be organized into in the Articles section in the Resources tab</p>

<hr />

<h4>Existing Article Types</h4>

<table>
	<tr>
		<th>Type</th>
		<th>Creator</th>
		<th>Date Created</th>
	</tr>
	
	<?php
				
	$query = "SELECT*FROM resource_ArticleTypes ORDER BY `order`";	
	$query = $this->db->query($query);
	$article_types= $query->result();
				
	foreach($article_types as $article_type){
		
		echo "<tr>";			
			echo "<td>$article_type->article_type</td>";
			echo "<td>$article_type->user</td>";
			echo "<td>$article_type->date</td>";
		echo "</tr>";	
	}

	?>	

</table>
	
<hr />

<form action="<?php echo URL?>dashboard/resources/addArticleType" method="post">
	
	<fieldset>
		<legend>Add New Type</legend>
		<label for="txtNewArticleType">Article Type Name</label>
		<input id="txtNewArticleType" type="text" name="txtNewArticleType" /><br />
		
	</fieldset>
	
	<input type="submit" value="Add Type" />
</form>

<hr />

<form action="<?php echo URL?>dashboard/resources/deleteArticleType" method="post">
	
	<fieldset>
		<legend>Delete Type</legend>
		<select id="DeleteTypeDD" name="DeleteTypeDD">
			
			<?php
					
							
				foreach($article_types as $article_type){
									
					echo "<option>$article_type->article_type</option>";
				}
			?>	
			
		</select>
		
	</fieldset>
	
	<input type="submit" value="Delete Type" />
</form>

<hr />

<h4>Order(Drag to the desired order)</h4>
<form action="<?php echo URL?>dashboard/resources/changeArticleTypeOrder" method="post" style="width:auto">
	
	<ul id="sortable">
		<?php foreach($article_types as $article_type){
			
			$id = $article_type->id;
			$order = $article_type->order;
			
			echo '<li  class="ui-state-default" id="sort_'.$id.'">
				  <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>'.$article_type->article_type.'
				  <input type="hidden" id="order'.$id.'" name="order_'.$id.'" value="'.$order.'" />
				  <input type="hidden" name="ids[]" value="'.$id.'" />
				  </li>';
		}	
		
		?>
	</ul>

	<input type="submit" name="submit" value="Change Order" />
</form>
