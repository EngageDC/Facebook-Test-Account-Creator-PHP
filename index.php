<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Facebook Test Account Generator!</title>
</head>
<body>
	<h1>Facebook Test Account Generator</h1>
	
	<?php
		if (!isset($_GET['name']) || empty($_GET['name'])) :
			include 'pages/form.php';
		else :
			include 'pages/results.php';
		endif;
	?>
	
</body>
</html>