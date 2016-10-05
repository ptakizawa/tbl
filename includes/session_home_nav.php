	<?php 
		$menu_subpages = array("_reading", "_videos", "_raq", "_tbq");	
		$current_page= (basename($_SERVER['SCRIPT_NAME'], '.php'));
		$base_page = str_replace($menu_subpages, "", $current_page);
	?>
	
<div class="col-xs-6">
      <h4>Before the Session</h4>
      <p><a href="reading.php">Read the background material</a></p>
      <p>OR
      <p><a href="videos.php">Watch the videos</a></p> 
    </div>
    <div class="col-xs-6">
      <h4>In-class Session</h4>
      <p><a href="raq.php">Readiness Assessment Quiz</a></p>
      <p><a href="tbq.php">Team-Based Questions</a></p>
 </div>	
