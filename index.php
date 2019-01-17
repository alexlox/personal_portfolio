<?php

// Prepare variable to choose the correct style file
$realFileBasename = basename(__FILE__, ".php");
include_once 'header.php';
?>

<div id="banner">
	<h1>Personal Portfolio</h1>
	<em>"Money did not break my values"</em>
	<h2>Alexandru Necula</h2>
</div>

<?php /* Writing all the content in this div is handled by load_knowledge.js from js directory. */ ?>
<div id="my-knowledge-container">
	<div id="my-knowledge-title">My knowledge</div>
	<div id="my-knowledge-categories"></div>
</div>

<div id="navigation">
	<div id="navigation-title">Find out more</div>
	<div id="navigation-menu">
		<a class="navigation-item" href="/projects">Projects</a>
		<a class="navigation-item" href="/about">About Me</a>
		<a class="navigation-item" href="/contact">Contact Me</a>
	</div>
</div>

<?php
include_once 'footer.php';
?>