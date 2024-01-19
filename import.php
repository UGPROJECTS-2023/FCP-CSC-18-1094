<?php
include 'db.php';
session_start();
$eo_department = $_SESSION["department"];
if(isset($_POST["import"])){
		
$adm_type = $_POST['adm_type'];
		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
				 $chk = "SELECT regno FROM result_sheet WHERE regno = '$emapData[0]'";
				 $chkqry = mysqli_query($con, $chk) or die (mysql_error());
				 $chkcount = mysqli_num_rows($chkqry);
				 
				if($chkcount < 1){
	          //It wiil insert a row to our subject table from our csv file`
	           $sql = "INSERT into result_sheet (`regno`, `name`, `state`, `jscore`, `pscore`, `aggregate`, `catchment`, `elds`, `adm_type`, `department`) 
	            	values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$adm_type','$eo_department')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query($con, $sql) or die(mysql_error());
				}
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						</script>";
				
				}else {
				echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"upload_score.php\"
					</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         
	        
			 

			 //close of connection
			mysqli_close($con); 
				
		 	
			
		 }
	}	 
?>		 