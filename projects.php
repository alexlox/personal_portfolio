<?php

// Prepare variable to choose the correct style file
$realFileBasename = basename(__FILE__, ".php");
include_once 'header.php';
include_once 'navlinks.php';
include_once 'includes/dbc.inc.php';

/* All the projects are stored in database.
   This is pretty strightforward. Select every information about every project from database and echo it accordingly.
   Don't lose time trying to understand all those divs and all those classes unless you read the css too(please don't). */
echo '<div id="projects-container">';
$sql = "SELECT * FROM projects ORDER BY idProject;";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
	echo '<a target="_blank" href="' . $row['projectLink'] . '">';
	echo '<div class="project" style="background: url(/images/' . $row['projectImageName'] . ') center;">';
	echo '<div class = "additional_background">';
	echo '<div class="project-title">' . $row['projectName'] . '</div><br/>';
	echo '<div class="project-description">' . $row['projectDescription'] . '</div>';
	echo '</div></div><hr>';
	echo '</a>';
}
echo '</div>';

include_once 'footer.php';