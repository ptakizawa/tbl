	<?php 
		$menu_subpages = array("_reading", "_videos", "_raq", "_tbq");	
		$current_page= (basename($_SERVER['SCRIPT_NAME'], '.php'));
		$base_page = str_replace($menu_subpages, "", $current_page);
	?>
	
<div class = 'navbar-wrapper'>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="../home.php">Home</a></li>
	    <li  class="nav navbar-nav dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Session Menu<span class="caret"></span></a>
            <ul class="dropdown-menu">
	            <li><a href="home.php">Session Home</a></li>	            
	            <li ><a href="reading.php">Reading</a></li>
	            <li><a href="videos.php">Videos</a></li>
	            <li><a href="raq.php">Readiness Quiz</a></li>
	            <li><a href="tbq.php">Team Questions</a></li>
            </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
   </div><!--/.containter -->
</div>
</div><!--/.navbar-wrapper -->
<div class="wide">
	  	<div class="col-xs-4 line"><hr></div>
	    <div class="col-xs-4 logo">Yale Team-Based Learning</div>
	    <div class="col-xs-4 line"><hr></div>
	</div>

