<?php
	require_once('../image.php');		// Load image class

	$a = new Image();			// Create new Image object

	$a->createFromFile('img/a.jpg');	// Create image from file	file : a.jpg
	$a->resize(200, 0);			// Scale image			width: 200px

	$a->show();				// Show result
//	$a->save('results/resized.jpg');	// And/Or save result		file  : results/resized.jpg
?>
