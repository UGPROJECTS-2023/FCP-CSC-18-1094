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
	
	<div class="container">

		<div class="row">
			<div class="span3 hidden-phone"></div>
	
	<div class="span6" id="form-login">
<center>
	<form class="form-horizontal well" action="" method="post"  enctype="multipart/form-data">
					<fieldset>
						<legend>Departmental Cut-off Mark & Quarter Settings</legend>
						<div class="control-group">
							<div class="control-label">
								<label>P-UTME Cut-off .:</label>
							</div>
							<div class="controls">
								<input type="text" name="cutoff" id="file" class="input-large" required>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<label>P-UTME Quarter .:</label>
							</div>
							<div class="controls">
								<input type="text" name="nos" id="file" class="input-large" required>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<label>D-ENTRY Cut-off .:</label>
							</div>
							<div class="controls">
								<input type="text" name="dcutoff" id="file" class="input-large" required>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<label>D-ENTRY Quarter .:</label>
							</div>
							<div class="controls">
								<input type="text" name="dnos" id="file" class="input-large" required>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="set" class="btn btn-primary button-loading" data-loading-text="Loading...">SET</button>
							</div>
						</div>
					</fieldset>
					
				</form>
					
				</center>
			<?php 
			$dept  =  $_SESSION['department'];
			$cutsql = mysqli_query($con, "SELECT pe_cut_off,pe_total_no,de_cut_off,de_total_no FROM department WHERE dept ='$dept'") or die(mysql_error());
		while ($cutrow = mysqli_fetch_array($cutsql)) {
			$cut = $cutrow['pe_cut_off'];
			 //$total_no = $cutrow['total_no'];
					?>
			<b>Department </b>		: <?php echo $_SESSION['department']; ?><br>
			<b>P-UTME Cut-off Mark</b> 	:<?php echo $cutrow['pe_cut_off']; ?><br>
			<b>P-UTME QUARTER </b>	:<?php echo $cutrow['pe_total_no']; ?><br>
			<b>D-ENTRY Cut-off Mark </b>	:<?php echo $cutrow['de_cut_off']; ?><br>
			<b>D-ENTRY QUARTER </b>	:<?php echo $cutrow['de_total_no']; ?>
		<?php  } ?>
				
			</div>
			
			
			<div class="span3 hidden-phone"></div>
			<div class="span4">
			
		
		<?php
		if(isset($_POST['set'])){
			$dept  =  $_SESSION['department'];
			$cutoff = $_POST['cutoff'];
			$nos = $_POST['nos'];
			$de_cutoff = $_POST['dcutoff'];
			$de_nos = $_POST['dnos'];
			
			mysqli_query($con, "UPDATE department SET pe_cut_off = '$cutoff', pe_total_no = '$nos',de_cut_off = '$de_cutoff', de_total_no = '$de_nos' WHERE dept ='$dept'") or die(mysql_error());
			?>
			<script>
			window.location = "cutoff.php";
			</script>
			<?php 
		}
		
		?>
			</div>
		</div>
		

		
	</div>

	</div>


	</body>
</html>