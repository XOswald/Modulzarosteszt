<?php

if (isset($_POST["submit"])) 
{
	$name = mysqli_real_escape_string($conn, $_POST["name"]);
	$email = mysqli_real_escape_string($conn, $_POST["email"];
	$username = mysqli_real_escape_string($conn, $_POST["uid"];
	$pwd = mysqli_real_escape_string($conn, $_POST["pwd"];
	$pwdrepeat = mysqli_real_escape_string($conn, $_POST["pwdrepeat"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if(emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false)
	{
		header("location: ../signupminta.php?error=emptyinput");
		exit();
	}
	if(invalidUid($username) !== false)
	{
		header("location: ../signupminta.php?error=invalidUid");
		exit();
	}
		if(invalidEmail($email) !== false)
	{
		header("location: ../signupminta.php?error=invalidemail");
		exit();
	}
		if(pwdMatch($pwd, $pwdrepeat) !== false)
	{
		header("location: ../signupminta.php?error=passwordsdontmatch");
		exit();
	}
		if(uidExists($conn, $username, $email) !== false)
	{
		header("location: ../signupminta.php?error=usernametaken");
		exit();
	}
	
	createUser($conn, $name, $email, $username, $pwd);
}
else
{
	header ("location: ../signupminta.php");
}