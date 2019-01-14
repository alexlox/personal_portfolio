	<footer>
		I invite you to see the source code of this website on <a id="footerlink" href="#">Github(not working, should be updated soon)</a>.
	</footer>
<?php
	if(isset($realFileBasename))
	{
		if($realFileBasename == "index" || $realFileBasename == "contact")
		{
			echo '<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>';
		}
		if($realFileBasename == "index")
		{
			echo '<script type="text/javascript" src="js/load_knowledge.js"></script>';
		}
		else if($realFileBasename == "contact")
		{
			echo '<script type="text/javascript" src="js/toggleforms.js"></script>';
		}
	}
?>
</body>
</html>