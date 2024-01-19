<?php 

$con = mysqli_connect("localhost","root","") or die("Could not connect");
mysqli_select_db($con, "admission_mgt") or die("could not connect database");
?>