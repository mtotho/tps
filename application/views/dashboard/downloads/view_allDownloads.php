<h3>All Uploaded Files</h3>

<table>
	<tr>
		<th>File Name</th>
		<th>Uploader</th>
		<th>Date</th>
	</tr>

		<?php $results = $this->Download_model->readTable('downloads_files'); 
			
			foreach($results as $result){
				echo "<tr>";
				echo "<td><a href=\"".URL."download?download=$result->filename\" target=\"_blank\">$result->filename</a></td>";
				echo "<td>$result->uploader</td>";
				echo "<td>$result->date</td>";
				echo "</tr>";
			}
			
		?>
	
</table>