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
                                            </div>
                                        </div>

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Admission List</strong>
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
                                    $query = mysqli_query($con, "select * from result_sheet WHERE department = '$eo_department' AND status = '1' AND adm_type = 'de'") or die(mysql_error());
									
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
								
								?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                

	</div>

	</div>

	</body>
</html>
     