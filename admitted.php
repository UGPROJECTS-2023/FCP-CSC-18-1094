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
				<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
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
				<form class="form-horizontal well" action="adm_letter.php" method="post"  enctype="multipart/form-data">
					<fieldset>
						<legend><font color = "green">Congratulations !! </font><?php echo $_SESSION["regno"];?></legend>
						<div class="control-group">
							
								<label>We are happy to inform you that you have been awarded admission into <br/>BAYERO UNIVERSITY, KANO <br>to study <br>COMPUTER SCIENCE </label>
							
							
						</div>
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="check" class="btn btn-primary button-loading" data-loading-text="Loading...">Print Admission Letter</button>
							</div>
						</div>
					</fieldset>
				</form>
				
				<?php
	//session_start();
	
	if (isset($_POST['submit'])){
	$regno = $_POST['regno'];

		$sqlchk = mysqli_query($con, "SELECT * FROM result_sheet where regno = '$username' AND password = '$password'") or die(mysql_error());
		$sqlstaff = mysqli_query($con, "SELECT * FROM teachers where username = '$username' AND password = '$password'") or die(mysql_error());
		if(mysqli_num_rows($sqlstudent) == 1){
			$rowstudent = mysqli_fetch_array($sqlstudent);
			$name = $rowstudent['username'];
			
			$_SESSION["name"] = $name;
			header("location: view_result.php");
			}
			
			else if(mysqli_num_rows($sqlstaff) == 1) {
			$rowstaff = mysqli_fetch_array($sqlstaff);
			$name = $rowstaff['username'];
			
			$_SESSION["name"] = $name;
			header("location: upload_csv.php");
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