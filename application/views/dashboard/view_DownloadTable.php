<div id="DownloadTable">
	<h3>Download Tables</h3>
	<hr />
	
	<h4>Unique Downloaders</h4>	
	<p>This tables has 1 unique entry for everyone who has downloaded a file from this site.</p>
	<div id="UniqueDownloaders" class="divTable">
		
		<?php
		$users = $this->Download_model->readTable('download_userInfo');
		?>
		<table>
			<tr>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Title</th>
				<th>Organization</th>
				<th>Phone</th>
			</tr>
			
			<?php foreach($users as $user){ ?>
			
			<tr>
				<td><?php echo $user->email ?></td>
				<td><?php echo $user->fname ?></td>
				<td><?php echo $user->lname ?></td>
				<td><?php echo $user->title ?></td>
				<td><?php echo $user->organization ?></td>
				<td><?php echo $user->phone ?></td>
			</tr>
					
			<?php } ?>
		</table>	
	</div>

	<hr />
	
	<h4>All Downloads</h4>
	<p>This table list each file that has been download, who downloaded it and the date of download</p>
	<div id="AllDownloads">
		<?php
		$downloads = $this->Download_model->readTable('downloads');
		?>
		<table>
			<tr>
				<th>Email</th>
				<th>File</th>
				<th>Date</th>
			</tr>
			
			<?php foreach($downloads as $download){ ?>
			
			<tr>
				<td><?php echo $download->email ?></td>
				<td><?php echo $download->file ?></td>
				<td><?php echo $download->date ?></td>
			</tr>
					
			<?php } ?>
		</table>	
		
	</div>

</div>
