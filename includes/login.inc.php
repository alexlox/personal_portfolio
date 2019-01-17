<?php

session_start();

// The button needs to be pressed
if(isset($_POST['submit']))
{
	include_once 'dbc.inc.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	if(empty($username) || empty($password))
	{
		header('Location: /contact/error/empty');
		exit();
	}
	/* Make a prepared statement to get the hashed password specific to the username inserted from the database  */
	$sql = "SELECT pass FROM accounts WHERE username = ? OR email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		header('Location: /contact/error/db');
		exit();
	}
	else
	{
		mysqli_stmt_bind_param($stmt, "ss", $username, $username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $row);
		if(mysqli_stmt_fetch($stmt))
		{
			/* Verify inserted password with the hashed password from the database */
			$pwdCheck = password_verify($password, $row);
			if(!$pwdCheck)
			{
				header('Location: /contact/error/pass');
				exit();
			}
			else
			{
				/* If the login info is correct, set  the session and go to the contact page with error set to 'none' */
				$_SESSION['username'] = $username;
				header('Location: /contact/error/none');
				exit();
			}
		}
		else
		{
			header('Location: /contact/error/username');
			exit();
		}
	}
}
else
{
	header('Location: /contact');
	exit();
}