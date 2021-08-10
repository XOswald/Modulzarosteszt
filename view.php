<?php
$dbh = new PDO ("mysql:host=localhost;dbname=modulzaros", "root", "");
$id=isset($_GET['UsersId'])? $_GET['UsersId'] : "";
$stat=$dbh->prepare("select * from adatok where UsersId=?");
$stat->bindParam(1, $UsersId);
$stat->execute();
$row=$stat->fetch();
header('Content-Type:' .$row['usersimage']);
echo $row('data');