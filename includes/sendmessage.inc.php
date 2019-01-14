<?php

session_start();

if(isset($_POST['submit']))
{
	include_once 'dbc.inc.php';

	$subject = $_POST['subject'];
	$message = $_POST['message'];
	// Lines should not be larger than 70 characters. Read PHP mail() documentation.
	$message = wordwrap($message, 70, "\r\n");
	if(empty($subject) || empty($message))
	{
		header('Location: ../contact.php?error=sendempty');
		exit();
	}
	$mailTo = "admin@alexandru-necula.dx.am";
	$sql = "SELECT email, messagesNr FROM accounts WHERE username = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		header('Location: ../contact.php?error=db');
		exit();
	}
	mysqli_stmt_bind_param($stmt, "s", $_SESSION['username']);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt, $row1, $row2);
	if(mysqli_stmt_fetch($stmt))
	{
		$header = "From: " . $row1;
		$messagesNr = $row2;
		$messagesNr++;
		if(!mail($mailTo, $subject, $message, $header))
		{
			header('Location: ../contact.php?error=mail');
			exit();
		}
		$sql = "UPDATE accounts SET messagesNr = ?, lastMessage = ? WHERE username = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql))
		{
			header('Location: ../contact.php?error=db');
			exit();
		}
		mysqli_stmt_bind_param($stmt, "iss", $messagesNr, $_POST['message'], $_SESSION['username']);
		mysqli_stmt_execute($stmt);
		header('Location: ../contact.php?error=sendnone');
		exit();
	}
	else
		{
		header('Location: ../contact.php?error=sendusername');
		exit();
	}
}
else
{
	header('Location: ../contact.php');
	exit();
}