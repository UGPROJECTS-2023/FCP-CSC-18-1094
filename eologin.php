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
						<legend>Faculty Exam Officers Login </legend>
						<div class="control-group">
							<div class="control-label">
								<label>Username:</label>
							</div>
							<div class="controls">
								<input type="text" name="uname" id="file" class="input-large" placeholder = "Username">
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<label>Password:</label>
							</div>
							<div class="controls">
								<input type="password" name="upass" placeholder = "Password" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
				
				<?php
	//session_start();
	
	if (isset($_POST['submit'])){
	$username = $_POST['uname'];
	$password = $_POST['upass'];

		
		$sqlstaff = mysqli_query($con, "SELECT * FROM teachers where username = '$username' AND password = '$password'") or die(mysql_error());
			
			 if(mysqli_num_rows($sqlstaff) == 1) {
			//	 session_start();
			$rowstaff = mysqli_fetch_array($sqlstaff);
			$name = $rowstaff['username'];
			$eo_department = $rowstaff['department'];
			
			$_SESSION["name"] = $name;
			$_SESSION["department"] = $eo_department;
?>
<script>
window.location= "eo_home.php";
</script>			
			<?php
		}else
echo " invalid login details or user does not exists";
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