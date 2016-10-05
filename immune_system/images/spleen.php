<!DOCTYPE>
<lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php
		$xml = simplexml_load_file('lab_data.xml');
		$slide_name = $xml->lab_slides->spleen;
		$title= $slide_name->title;	
	?>
	<title><?php echo $title;?></title>
	<link rel = "stylesheet" href="../styles/base.css" type="text/css">
	<script type="text/javascript" src="../scripts/jquery_min.js"></script>
	<script type="text/javascript" src="../scripts/lab_slides.js"></script>
</head>
<body>
<div id="main-slide">
	<?php include('../includes/header.inc.php'); ?>
	<div id="back-to-lab"><a href="../immune_system_lab.php#slides">Slide List</a></div>
	<div id="slide-header">
		<div class="previous"><a href=""><img src="../images/chevron_left.png"></a></div>
		<div class="slide-title"><?php echo $title;?></div>
		<div class="next">
			<img src="../images/chevron_right.png">
		</div>
	</div>
	<div id ="slide">
		<div id="slide-image">
			<img src="<?php echo $slide_name->image;?>">
		</div>
		<div id="slide-labels">
			<img src="<?php echo $slide_name->labels;?>">
		</div>
		<div id="slide-description">
			<h3><?php echo $title;?></h3>
			<?php echo $slide_name->text;?>
		</div> 
	</div>
	<button type="button" class="labels">Hide Labels</button>			
</div>
</body>
