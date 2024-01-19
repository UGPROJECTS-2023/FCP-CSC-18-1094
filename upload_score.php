<?php 
	include 'db.php';
?>
<!DOCTYPE html>
	
<html lang="en">
<?php
include('header.php');
?>

	<body>
<?php include('navbar3.php');?>
	<div id="wrap">
	<center>
	<div class="container">

		<div class="row">
			<div class="span3 hidden-phone"></div>
			                     		<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post"  enctype="multipart/form-data">
					<fieldset>
						<legend>Departmental Post-Utme / DE Score Upload</legend>
						<div class="control-group">
							<div class="control-label">
								<label>Post-Utme Score Upload.:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<label>Admission Type.:</label>
							</div>
							<div class="controls">
								<select name="adm_type" class="input-large" required>
								<option value = "">Select Admission Type</option>
								<option value = "pe">Post-Utme Admission</option>
								<option value = "de">Direct-Entry Admission</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="import" class="btn btn-primary button-loading" onclick = "Are Sure You Want to Upload ?" data-loading-text="Loading...">Upload Scores</button>
							</div>
						</div>
					</fieldset>
				</form>
				
				
				
				
			</div>
			
			
			<div class="span3 hidden-phone"></div>
		</div>
		

		
	</div>
</center>
	</div>


	</body>
</html>