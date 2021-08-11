<?php

$serverName = "localhost";
$Username = "root";
$dbPassword = "";
$dBName = "profilok";

$conn = mysqli_connect($serverName, $Username, $dbPassword, $dBName);

if(!$conn)
{
	die("Sikertelen kapcsolat" . mysqli_connect_errror());
}