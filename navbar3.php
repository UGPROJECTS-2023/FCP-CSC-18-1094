
<div class="navbar navbar-fixed-top navbar-inverse">
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
                    
						<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-folder-close-alt icon-large"> </i>&nbsp;Upload Result / Set Cut-Off
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                    <li><a href="cutoff.php"><i class="icon-group icon-large"></i>&nbsp;Set Cut-Off Mark</a></li>
                    <li><a href="upload_score.php"><i class="icon-folder-open icon-large"></i>&nbsp;Upload UTME/DE Result</a></li>
                            
                        </ul>
                    </li>                    
					

					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-folder-close-alt icon-large"> </i>&nbsp;View Scores
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="dept_score.php">POST-UTME Scores</a></li>
							<li><a href="de_dept_score.php">DIRECT-ENTRY Scores</a></li>
                            
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-folder-close-alt icon-large"> </i>&nbsp;View Admitted
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="dept_admission.php">POST-UTME Admission</a></li>
							<li><a href="de_dept_admission.php">DIRECT-ENTRY Admission</a></li>
                            
                        </ul>
                    </li>                    
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-folder-close-alt icon-large"> </i>&nbsp;View Unadmitted
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="dept_admission_non.php">POST-UTME Admission</a></li>
							<li><a href="de_dept_admission_non.php">DIRECT-ENTRY Admission</a></li>
                            
                        </ul>
                    </li>                    
                    <li><a  href="logout.php" role="button"  ><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
<li>    
                                        &nbsp;
                                    <div class="btn-group">
                                       
                                        <button class="btn btn-success"><i class="icon-user icon-large"></i>&nbsp; <?php echo $_SESSION['name'] . " from " . $_SESSION['department']; ?></button>
                                    </div>

 
        
    </li>                        
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
