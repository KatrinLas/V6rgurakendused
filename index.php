<!DOCTYPE html>
<html>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);?>

	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
		<title>klasberg</title>
	</head>
	<body>
		<h1>Suvaline pilt internetist</h1>
		
		<p> Kas nyyd t88tab?</p>
		<img src="suva.jpg" alt="mootorratas" style=100%/>
		<div id="kuupaev"><script src="plugin.js"></script></div>
		<?php
		echo 'Current PHP version: ' . phpversion();
		echo phpversion('tidy');
		?>
	</body>
</html>


