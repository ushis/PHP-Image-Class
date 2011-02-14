<?php
	require_once('../image.php');		// Load image class

	$b = new Image();			// Create new Image object b
	$b->createFromFile('img/b.png');	// Create image from file 	file : b.png
	$b->resize(0, 150);			// Scale image			height: 150px

	$a = new Image();			// Create new Image object a
	$a->createFromFile('img/a.jpg');	// Create image from file 	file    : a.jpg
	$a->merge($b, 'right', 30);		// Put image b on image a	position: right/30
	$a->resize(200, 0);			// Scale image			width   : 200px

	$a->show();				// Show result
?>
