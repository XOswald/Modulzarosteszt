<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modulzáró feladat</title>
    <link href="css/stylesheet.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="kaszaimodul.php">A Szabadság Szárnyai</a>
        <ul class="navbar-nav mr-auto">
		<?php
			if(isset($_SESSION["useruid"]))
			{
				echo "<li class='nav-item'><a class='nav-link' href='profil.php'>Profil</a></li>";
				echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Kilépés</a></li>";
			}
			else
			{
				echo "<li class='nav-item'><a class='nav-link' href='signupminta.php'>Regisztráció</a></li>";
				echo "<li class='nav-item'><a class='nav-link' href='login.php'>Bejelentkezés</a></li>";
			}
		?>
        </ul>
    </nav>