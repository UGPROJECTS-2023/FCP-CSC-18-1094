<?php 
	include 'db.php';
?>
<!DOCTYPE html>
	
<html lang="en">
<?php
include('header.php');
?>

	<body> <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->

            <!-- Everything you want hidden at 940px or less, place within here -->



            <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->

                <ul class="nav">
				<li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
                            <li><a href="check_status.php"><i class="icon-folder-open icon-large"></i>&nbsp;Check Admission Status</a></li>
                            <li><a  href="eologin.php" role="button" ><i class="icon-signout icon-large"></i>&nbsp;Faculty E.O Login</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="hero-unit-header">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">


                <div class="row-fluid">
                    <div class="span6">
                        <img src="images/head.png">
                    </div>
                      </div>
            </div>
        </div>

    </div>
</div>
	<!-- Navbar
    ================================================== -->

	<div id="wrap">
	<center>
	<div class="container">

		<div class="row">
			<div class="span3 hidden-phone"></div>
		<div class="span6" id="form-login">
				<form class="form-horizontal well" action="" method="post"  enctype="multipart/form-data">
					<fieldset>
						<legend>Check Admission Status </legend>
						<div class="control-group">
							<div class="control-label">
								<label>UTME / DE Registration No.:</label>
							</div>
							<div class="controls">
								<input type="text" name="regno" id="file" class="input-large" placeholder = "Registration Number" required />
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="check" class="btn btn-primary button-loading" data-loading-text="Loading...">Check Status</button>
							</div>
						</div>
					</fieldset>
				</form>
				
				<?php
	//session_start();
	
	if (isset($_POST['check'])){
	$regno = $_POST['regno'];
$sqlnum = mysqli_query($con, "SELECT * FROM result_sheet where regno = '$regno'") or die(mysql_error());
$sqlchk = mysqli_query($con, "SELECT * FROM result_sheet where regno = '$regno' AND status = '1'") or die(mysql_error());
if(mysqli_num_rows($sqlnum) > 0) {
		if(mysqli_num_rows($sqlchk) == 1){
			
			$_SESSION = mysqli_fetch_array($sqlchk);		
			
?>
			<script>
			alert(" Congrats You have been award admission");
			window.location = "admitted.php";
			</script>

<?php
			}else{ ?>
			<script>
			alert("No Yet Admitted");
			</script>
				
 <?php
			}
}else{ ?>
			<script>
			alert(" The Registration Number You entered does not exist on this System");
			</script>

<?php
			}
	}
?>

				
				
				
			</div>
			
			<div class="span3 hidden-phone"></div>
		</div>
		

		
	</div>
</center>
	</div>

	</body>
</html>