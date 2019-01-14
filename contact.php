<?php

session_start();

$realFileBasename = basename(__FILE__, ".php");
include_once 'header.php';
include_once 'navlinks.php';

echo '<div id="contact-container">';

if(isset($_SESSION['username']))
{
?>
	<form action="includes/logout.inc.php" method="POST">
		<button type="submit" name="submit">Log Out</button>
	</form>
<?php
	if(isset($_GET['error']))
	{
		switch ($_GET['error'])
		{
			case "sendnone":
				echo "<div class='success'>You have successfully sent the message. I will try to respond as soon as possible.</div>";
				break;
			case "sendempty":
				echo "<div class='error'>You must fill both subject and message fields.</div>";
				break;
			case "sendusername":
				echo "<div class='error'>Okay, this is really weird. It seems like your username is not in our database.</div>";
				break;
			case "mail":
				echo "<div class='error'>Mail failed to send. If this persists, please go to About Me page and send a message on my facebook. Sorry for the inconvenience.</div>";
				break;
			default:
		}
	}
?>
	<fieldset>
	<legend>Send something!</legend>
	<form action="includes/sendmessage.inc.php" method="POST">
		<input type="text" name="subject" placeholder="Subject" required><br/><br/>
		<textarea name="message" cols="50" rows="10" placeholder="Write message here..." required>Hi Alex,</textarea><br/><br/>
		<button type="submit" name="submit">Send</button>
	</form>
	</fieldset>
<?php
}
else
{
	if(isset($_GET['logout']))
	{
		switch ($_GET['logout'])
		{
			case "success":
				echo "<div class='success'>You have successfully logged out.</div>";
				break;
			default:
				echo "<div class='error'>Log out didn't work as expected.</div>";
		}
	}
	if(isset($_GET['error']))
	{
		switch ($_GET['error'])
		{
			case "none":
				echo "<div class='success'>You have successfully logged in.</div>";
				break;
			case "empty":
				echo "<div class='error'>You must fill both username and password fields.</div>";
				break;
			case "username":
				echo "<div class='error'>Username or E-Mail invalid.</div>";
				break;
			case "pass":
				echo "<div class='error'>Password is invalid.</div>";
				break;
			case "db":
				echo "<div class='error'>Database error. Sorry about that.</div>";
				break;
			case "signupnone":
				echo "<div class='success'>You have successfully signed up.</div>";
				break;
			case "signupempty":
				echo "<div class='error'>You must fill all fields.</div>";
				break;
			case "signupusername":
				echo "<div class='error'>Username already used.</div>";
				break;
			case "signupemail":
				echo "<div class='error'>E-Mail already used.</div>";
				break;
			case "signuppassword":
				echo "<div class='error'>Password did not match with password confirm.</div>";
				break;
			case "signupregex":
				echo "<div class='error'>Both username and password must fulfill the following conditions:<br/>Start with a letter or number or _<br/>Have a length of minimum 6 symbols.<br/>Can contain only letters, numbers or _!@#$%^&*<> symbols.</div>";
			default:
		}
	}
?>
	<div class = "error">You have to be logged in to send a message.</div>
	<fieldset id="loginform">
		<legend>Log In</legend>
		<form action="includes/login.inc.php" method="POST">
			<input type="text" name="username" placeholder="Username or E-Mail" required><br/><br/>
			<input type="password" name="password" placeholder="Password" required><br/><br/>
			<button type="submit" name="submit">Log In</button>
			<button id="signup">Sign Up!</button>
		</form>
	</fieldset>
	<fieldset id="signupform">
		<legend>Sign Up</legend>
		<form action="includes/signup.inc.php" method="POST">
			<input type="text" name="username" placeholder="Username" required><br/><br/>
			<input type="email" name="email" placeholder="E-Mail" required><br/><br/>
			<input type="password" name="password" placeholder="Password" required><br/><br/>
			<input type="password" name="passwordconf" placeholder="Confirm Password" required><br/><br/>
			<button type="submit" name="submit">Sign Up</button>
			<button id="login">Log In</button>
		</form>
	</fieldset>
<?php
}

echo '</div>';

include_once 'footer.php';
?>
