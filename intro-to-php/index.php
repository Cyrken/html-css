<?php

// We created a new variable
// Variables always have $ in front of them
$name = 'Thomas'; // string; always inside quotes
$age = 15; // number; no quotes

?><!DOCTYPE html>
<html lang=en-ca>
<head>
	<meta charset=utf-8>
	<title>Intro to PHP</title>
	<link href="css/general.css" rel="stylesheet">
</head>
<body>

	<h1>Intro to PHP</h1>
	<p>PHP is a server-side scripting language to help automate tasks and build applications.</p>

	<?php
		// Write something out to the page
		echo 'Thomas';
		echo ' ';
		echo 'Bradley';
		echo '<strong>Dinosaurs rock!</strong>';
	?>

	<strong><?php echo 'Hello'; ?></strong>

	<p><?php echo date('Y-m-d h:i:s'); ?></p>

	<p><?php echo $name; ?> is awesome!</p>
	<strong><?php echo $name; ?> is going to be <?php echo $age + 5; ?> in 5 years.</strong>

</body>
</html>
