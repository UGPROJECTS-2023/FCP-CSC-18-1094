<?php 
	include 'db.php';
?>
<!DOCTYPE html>
	
<html lang="en">
<?php
include('header.php');
?>

	<body>
<?php include('navbar2.php');
?>
	<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend></legend>
						<div class="control-group">
							<div class="control-label">
								<label>Report: </label>
							</div>
							<div class="controls">
								<textarea name = "msg"></textarea>
								</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Send</button>
							</div>
						</div>
					</fieldset>

					</form>
<?php					session_start();
						
					if (isset($_POST['submit'])){
					$msg = $_POST['msg'];
					$name = $_SESSION["name"];
					$qry = mysql_query("INSERT INTO admin_box (message,sender)VALUES('$msg', '$name')") or die(mysql_error());
					if ($qry) {
					echo "message sent";
					}else{
					echo "message not sent";
					}
					}
					
					?>

			</div>
			<div class="span3 hidden-phone"></div>
		</div>
		
	</div>

	</div>

	</body>
</html>