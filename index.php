<?php
// For atomatically set stylesheet filename in header.php
$realFileBasename = basename(__FILE__, ".php");
include_once 'header.php';
?>

<div id="banner">
	<h1>Personal Portfolio</h1>
	<em>"Money did not break my values"</em>
	<h2>Alexandru Necula</h2>
</div>

<div id="my-knowledge-container">
	<div id="my-knowledge-title">My knowledge</div>
	<div id="my-knowledge-categories"></div>
</div>

<div id="navigation">
	<div id="navigation-title">Find out more</div>
	<div id="navigation-menu">
		<a class="navigation-item" href="projects.php">Projects</a>
		<a class="navigation-item" href="aboutme.php">About Me</a>
		<a class="navigation-item" href="contact.php">Contact Me</a>
	</div>
</div>

<?php
include_once 'footer.php';
?>