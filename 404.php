<?php

/* This file appears when a non-existing page is requested like domain.com/non-existent-page */
// Prepare variable to choose the correct style file
$realFileBasename = basename(__FILE__, '.php');
include_once 'header.php';
include_once 'navlinks.php';
echo '<h1>404 Not Found!<br/><br/>If you are having trouble finding something, please contact me.</h1>';
include_once 'footer.php';