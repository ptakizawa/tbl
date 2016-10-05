	<?php 
		$menu_subpages = array("_reading", "_videos", "_raq", "_tbq");	
		$current_page= (basename($_SERVER['SCRIPT_NAME'], '.php'));
		$base_page = str_replace($menu_subpages, "", $current_page);
	?>
	
	<div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
	        <li role="presentation"><a href="<?php echo "tbl.php" ?>">TBL Home</a></li>
            <li  class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Session Menu<span class="caret"></span></a>
	            <ul class="dropdown-menu">
		            <li><a href="<?php echo $base_page . ".php" ?>">Home</a></li>	            
		            <li ><a href="<?php echo $base_page . "_reading.php" ?>">Reading</a></li>
		            <li><a href="<?php echo $base_page . "_videos.php" ?>">Videos</a></li>
		            <li><a href="<?php echo $base_page . "_raq.php" ?>">Readiness Quiz</a></li>
		            <li><a href="<?php echo $base_page . "_tbq.php" ?>">Team Questions</a></li>
	            </ul>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted"><a href="http://tbl.med.yale.edu/tbl.php">Yale Medicine Team-Based Learning</a></h3>
      </div>	
