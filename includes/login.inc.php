<?php

session_start();

if(isset($_POST['submit']))
{
	include_once 'dbc.inc.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	if(empty($username) || empty($password))
	{
		header('Location: ../contact.php?error=empty');
		exit();
	}
	$sql = "SELECT pass FROM accounts WHERE username = ? OR email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		header('Location: ../contact.php?error=db');
		exit();
	}
	else
	{
		mysqli_stmt_bind_param($stmt, "ss", $username, $username);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if($row = mysqli_fetch_assoc($result))
		{
			$pwdCheck = password_verify($password, $row['pass']);
			if(!pwdCheck)
			{
				header('Location: ../contact.php?error=pass&uname=' . $username);
				exit();
			}
			else
			{
				$_SESSION['username'] = $username;
				header('Location: ../contact.php?error=none');
				exit();
			}
		}
		else
		{
			header('Location: ../contact.php?error=username');
			exit();
		}
	}
}
else
{
	header('Location: ../contact.php');
	exit();
}