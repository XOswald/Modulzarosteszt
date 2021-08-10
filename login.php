<?php
 include_once 'menu.php';
?>
    <link href="css/style - login2.css" rel="stylesheet">
	<section class="container">
            <h2>Bejelentkezés</h2>
		<div class="container">
		<form action="includes/login.inc.php" method="post">
			<input type="text" name="uid" placeholder="Felhasználónév...">
			<input type="password" name="pwd" placeholder="Jelszó...">
			<button type="submit" name="submit">Bejelentkezés</button>
		</form>
		</div>
		<?php
		if(isset($_GET["error"]))
		{
			if($_GET["error"] == "emptyinput")
			{
				echo "<p>Kérem töltsön ki minden mezőt</p>";
			}
			else if ($_GET["error"] == "wronglogin")
			{
				echo "<p>Nem megfelelő belépés</p>";
			}
		}
	?>
    </section>
	
<?php
	include_once 'footer.php';
?>