<?php

$realFileBasename = basename(__FILE__, ".php");
include_once 'header.php';
include_once 'navlinks.php';
include_once 'includes/dbc.inc.php';

echo '<div id="projects-container">';
$sql = "SELECT * FROM projects ORDER BY idProject;";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
	echo '<a target="_blank" href="' . $row['projectLink'] . '">';
	echo '<div class="project" style="background: url(../images/' . $row['projectImageName'] . ') no-repeat center;">';
	echo '<div class="project-title">' . $row['projectName'] . '</div><br/>';
	echo '<div class="project-description">' . $row['projectDescription'] . '</div>';
	echo '</div><hr>';
	echo '</a>';
}
echo '</div>';

include_once 'footer.php';