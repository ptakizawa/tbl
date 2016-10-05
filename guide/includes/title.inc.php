<?php $current_page= (basename($_SERVER['SCRIPT_NAME'], '.php')); 
	
	  $temp_title = str_replace('_', ' ', $current_page);
	  $title = str_ireplace(' em', ' EM', $temp_title);
	  $title = ucwords($title);

	  			
	  ?>