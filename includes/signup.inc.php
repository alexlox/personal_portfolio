<?php

session_start();

if(isset($_POST['submit']))
{
	include_once 'dbc.inc.php';

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordconf = $_POST['passwordconf'];

	// Check for different kind of errors
	if(empty($username) || empty($email) || empty($password))
	{
		header('Location: /contact/error/signupempty');
		exit();
	}
	if(!preg_match("/^[\w]+[\w!@#$%^&*<>]{5,}$/", $username) || !preg_match("/^[\w]+[\w!@#$%^&*<>]{5,}$/", $password))
	{
		header('Location: /contact/error/signupregex');
		exit();
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		header('Location: /contact/error/signupemail');
		exit();
	}

	// Check if the username or email is already in the database
	$sql = "SELECT username, email FROM accounts;";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result))
	{
		if(strcmp($row['username'],$username) === 0)
		{
			header('Location: /contact/error/signupusername');
			exit();
		}
		else if(strcmp($row['email'], $email) === 0)
		{
			header('Location: /contact/error/signupemail');
			exit();
		}
	}
	if(strcmp($password, $passwordconf) !== 0)
	{
		header('Location: /contact/error/signuppassword');
		exit();
	}

	/* Make a prepared statement to insert the info into the database */
	$sql = "INSERT INTO accounts (username, email, pass) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		header('Location: /contact/error/db');
		exit();
	}
	$hashedPass = password_hash($password, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPass);
	mysqli_stmt_execute($stmt);
	/* Also set the session
	   Since that person created an account, he also wants to be logged in */
	$_SESSION['username'] = $username;
	header('Location: /contact/error/signupnone');
	exit();
}
else
{
	header('Location: /contact');
	exit();
}