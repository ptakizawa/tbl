	<?php 
		$menu_subpages = array("_reading", "_videos", "_raq", "_tbq");	
		$current_page= (basename($_SERVER['SCRIPT_NAME'], '.php'));
		$base_page = str_replace($menu_subpages, "", $current_page);
	?>
	
<div class="col-md-3">
          <h4>Before the Session</h4>
          <p><a href="<?php echo $base_page ."_reading.php" ?>">Read the background material</a></p>
          <p>OR
	      <p><a href="<?php echo $base_page ."_videos.php" ?>">Watch the videos</a></p> 
        </div>
        <div class="col-md-3">
          <h4>In-class Session</h4>
          <p><a href="<?php echo $base_page ."_raq.php" ?>">Readiness Assessment Quiz</a></p>
          <p><a href="<?php echo $base_page ."_tbq.php" ?>">Team-Based Questions</a></p>
        </div>	
