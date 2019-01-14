<!DOCTYPE html >
<html lang="en-US">
<head>
	<title>Alexandru Necula</title>
	<meta charset="utf-8">
	<meta name="author" content="Alexandru Necula">
	<meta name="description" content="My personal portfolio. Come and find out if I am what you're looking for!">
	<meta property="og:image" content="images/portret.png">
	<meta property="og:description" content="My personal portfolio. Come and find out if I am what you're looking for!">
	<meta property="og:title" content="Alexandru Necula">
	<meta name="twitter:title" content="Alexandru Necula' Portfolio">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href= <?php 
		if(isset($realFileBasename))
			echo "styles/style" . $realFileBasename . ".css"; 
		else
			echo "error";
		?> >
	<?php
		if(isset($realFileBasename))
			if($realFileBasename == "aboutme")
				echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">';
	?>
</head>
<body>

