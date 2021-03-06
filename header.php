<!DOCTYPE html >
<html lang="en-US">
<head>
	<title>Alexandru Necula</title>
	<meta charset="utf-8">
	<meta name="author" content="Alexandru Necula">
	<meta name="description" content="My personal portfolio. Come and find out if I am what you're looking for!">
	<meta property="og:image" content="https://cdn.pixabay.com/photo/2017/01/29/13/21/mobile-devices-2017980_960_720.png">
	<meta property="og:image:width" content="200px">
	<meta property="og:image:height" content="200px">
	<meta property="og:description" content="My personal portfolio. Come and find out if I am what you're looking for!">
	<meta property="og:title" content="Alexandru Necula">
	<meta name="twitter:title" content="Alexandru Necula' Portfolio">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href= <?php 
		/* Make a request for specific stylesheet files according to the name of the page.
	   	   For example, when the file is called index.php, $realFileBasename will be set to 'index'
	   	   and the href of the link will be '/styles/styleindex.css'.
	   	   The variable is set in every file where it is needed. */
		if(isset($realFileBasename))
			echo "/styles/style" . $realFileBasename . ".css"; 
		else
			echo "error";
		echo '>';
		// I use font-awesome in about me page
		if(isset($realFileBasename))
			if($realFileBasename == "aboutme")
				echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">';
	?>
</head>
<body>

