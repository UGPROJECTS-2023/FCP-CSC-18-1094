<?php 
	include 'db.php';
?>
<script>
window.print();
</script>
<!DOCTYPE html>
	
<html lang="en">
<?php
include('header.php');
?>

	<body>
	<div id="wrap">
	<div class="container">

		<div class="row">
			
		<div class="span8" id="form-login">
					
						<legend><center><h2><b>FEDERAL UNIVERSITY DUTSE,  NIGERIA</b></h2></center></legend>
						<div class="control-group pull-right">
							
								<label>P.M.B. 3011, DUTSE, Nigeria <br/>
								Telephone: 064-666023<br>
								Telex: 77189 DUTSE NG <br>
								Fax: 064-665904<br>
								email:registrar@FUD.edu.ng <br>
								Telegrams: FUD, DUTSE
								</label>
							
							
						</div><br><br><br><br><br><br><br>
						<div class="control-group">
						VICE-CHANCELLOR: Prof.ABDUKAREEM SABO MUHAMMAD<br>
						REGISTRAR: Sani Ibrahim Amin
						</div>
						<div class="control-group pull-right">
						<b>OFFICE OF THE REGISTRAR</b><BR>
						DIRECTORATE OF ACADEMIC AFFAIRS <BR>
						
						</div>
						
						<hr>
						<div class="control-group">
						<b><?php echo $_SESSION['name']?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><?php echo $_SESSION['state']?></b>&nbsp; State<br>
						<b><?php echo $_SESSION['regno']?></b> <br><br>
						Dear Sir / Madam<br>
						<center><b><u>PROVISIONAL OFFER OF ADMISSION</u></b></center>
						<br>
						<br>
						Following your application into this University, I am pleased to offer you a provisional admission into level <?php if($_SESSION['adm_type'] == 'pe'){echo "1 (ONE)"; }else {echo "2 (TWO)";}?>
 study <b><?php echo $_SESSION['department']; ?></b><br><br>
 The offer of admission is made subject to the following conditions:<br><br>
 <ol type = "a">
 <li>You possess a minimum of 5 'O' Level credit, including English, and Mathematics for Science and Management Science and other two relevant credits in your course of study.</li>
 <li></li>
 
 </ol>
 <center>
Yours Faithfully,<br><br><br>
<b>Fatima Binta Mohammed <br>
ACTING DIRECTOR (ACADEMIC AFFAIRS)<br>
FOR: REGISTRAR </b>
</center>
						</div>
					</fieldset>
				
				
				
			</div>
			

		</div>
		

		
	</div>

	</div>

	</body>
</html>