<?php
	require_once('../image.php');			// Load image class

	$a = new Image();				// Create new Image object

	$a->create(200, 100);				// Create transparent image 	expand  : 200/100
	$a->ellipse(100, 0, 180, 100, '#acacac');	// Create ellipse 		position: 100/0	  | expand: 180/100 | color: #acacac
	$a->rectangle(90, 0, 110, 100, '#acacac');	// Create rectangle 		x1/y1   : 100/100 | x2/y2 : 110/100 | color: #acacac
	$a->ellipse(100, 100, 50, 50, '#acacac');	// Create ellipse 		position: 100/100 | expand: 50/50   | color: #acacac

	$a->show();					// Show image
?>
