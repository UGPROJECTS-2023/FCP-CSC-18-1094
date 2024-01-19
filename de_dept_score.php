<!DOCTYPE html>
<?php 
	include 'db.php';

?>	
<html lang="en">
<?php
include('header.php');
?>

	<body>    
            <?php include('navbar3.php'); ?>

	<!-- Navbar
    ================================================== -->


	<div id="wrap">
	<div class="container">
               <div class="span12">
                        <div class="hero-unit-3">
                                        <div class="control-group">
                                            <div class="controls">

                                             <form action = "" method = "POST" > 
											 <button name="generate" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Generate Admission</button>
											 <button name="truncate" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete All Scores</button>
											 </form>
											 
                                            </div>
                                        </div>

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Score Table</strong>
                                </div>
                                <thead>
                                    <tr>

                  		<th>REG</th>
				  		<th>NAME</th>
						<th>STATE</th>
						<th>DE SCORE</th>
						<th>DEPARTMENT</th>
						<th>ACTION</th>
				 
				  	                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									$eo_department = $_SESSION["department"];
                                    $query = mysqli_query($con, "select * from result_sheet WHERE department = '$eo_department' AND adm_type = 'de'") or die(mysql_error());
									
                                    while ($row = mysqli_fetch_array($query)) {
                                        $r_id = $row['id'];
                                        ?>
                                        <tr class="odd gradeX">

                                            <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                        
                                            $('#e<?php echo $r_id; ?>').tooltip('show')
                                            $('#e<?php echo $r_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                        
                                            $('#d<?php echo $r_id; ?>').tooltip('show')
                                            $('#d<?php echo $r_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    
                        <td><?php echo $row['regno']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['state']; ?></td>
						<td><?php echo $row['pscore']; ?></td>
						<td><?php echo $row['department']; ?></td>
						<td>
                                        <a rel="tooltip"  title="Delete Score" id="d<?php echo $r_id; ?>" href="#r_id<?php echo $r_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        
                                    </td>
                                    <!-- user delete modal -->
                                    <div id="r_id<?php echo $r_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this score?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_score.php<?php echo '?id=' . $r_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                        </div>
                                    </div>
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } 
																	if(isset($_POST['generate'])){
																		$eo_department = $_SESSION["department"];
																		//$adm_chk = "SELECT * FROM result_sheet WHERE status = '1'";
																		//$adm_qry = mysqli_query($con, $adm_chk);
																		//$adm_count = mysqli_num_rows($adm_qry);
																		
																		
			$dept  =  $_SESSION['department'];
			$cutsql = mysqli_query($con, "SELECT de_cut_off,de_total_no FROM department WHERE dept ='$eo_department'") or die(mysql_error());
		while ($cutrow = mysqli_fetch_array($cutsql)) {
			$cut = $cutrow['de_cut_off'];
			$total_no = $cutrow['de_total_no'];
			$merit = 0.4 * $total_no; 
			$catchment = 0.3 * $total_no; 
			$elds = 0.3 * $total_no; 
			} 
																		
									$merit_adm =	mysqli_query($con, "UPDATE result_sheet SET status = '1' WHERE (department = '$eo_department' AND adm_type = 'de' AND pscore >= $cut)  ORDER BY pscore DESC LIMIT $merit ") or die(mysql_error());
									$catchment_adm =	mysqli_query($con, "UPDATE result_sheet SET status = '1' WHERE (department = '$eo_department' AND adm_type = 'de' AND pscore >= $cut AND status = '0' AND catchment = '1')  ORDER BY pscore DESC LIMIT $catchment ") or die(mysql_error());
									$elds_adm =	mysqli_query($con, "UPDATE result_sheet SET status = '1' WHERE (department = '$eo_department' AND pscore >= $cut AND adm_type = 'de' AND status = '0' AND elds = '1')  ORDER BY pscore DESC LIMIT $catchment ") or die(mysql_error());
									if (($merit_adm)&&($catchment_adm)&&($elds_adm)){ ?>
										<script>
										window.location = "de_dept_admission.php";
										</script>
									
								<?php	}}
									
																										if(isset($_POST['truncate'])){																						
																		$eo_department = $_SESSION["department"];
mysqli_query($con, "DELETE FROM result_sheet WHERE department = '$eo_department' AND adm_type = 'de' ") or die(mysql_error());

																										}
								
								
								?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                

	</div>

	</div>

	</body>
</html>
     