<?php 
	include 'db.php';
?>
<!DOCTYPE html>
	
<html lang="en">
<?php
include('header.php');
?>

	<body>
<?php include('navbar2.php');?>
	<div class="row">
			<div class="span3 hidden-phone"></div>
				<div class="span6" id="form-login">
				<form class="form-horizontal well" action="result.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>SEARCH RESULT</legend>
						<div class="control-group">
							<div class="control-label">
								<label>SELECT SESSION:</label>
							</div>
							<div class="controls">
								<select name="session" class="input-large">
								<option>2013 - 2014</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">VIEW RESULT</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		
</div>
