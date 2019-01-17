<?php

// Prepare variable to choose the correct style file
$realFileBasename = basename(__FILE__, ".php");
include_once 'header.php';
include_once 'navlinks.php';

?>

<div id="aboutme-container">
	<img src="/images/portret.png" id="portret">
	<div id="text">
		Coding is one of my passions. It gets me fast. When I start writing code, I don't want to stop until I finish the project.<br/><br/>I love seeing how my projects get shape, how I make them evolve, do stuff and the feeling when I fix a bug.<br/><br/> That's why I started web developement, you can see the effects immediately from the first lines. This is what I'm planning to do as a living.<br/><br/>I like other activities such as sport, video games but coding is the reason you are here right now, right?<br/><br/>
		<?php // Font-Awesome icons, they are really nice ?>
		<a href="https://www.facebook.com/NeculaAlexandru98" target="_blank"><i class="fab fa-facebook"></i></a><div>If you want to tell me something fast.</div>
		<a href="https://github.com/alexlox"><i class="fab fa-github"></i></a><div>Do you want to see how I code?</div>
	</div>
	<div id="fb-link"></div>
</div>

<?php
include_once 'footer.php';
?>