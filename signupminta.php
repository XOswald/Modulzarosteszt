<?php
 include_once 'menu.php';
 session_start();
?>
    <link href="css/style - regist.css" rel="stylesheet">
	<section class="container">
            <h2>Regisztráció</h2>
		<div class="container">
		<form action="includes/signup.inc.php" method="post">
			<input type="text" name="name" placeholder="Teljes Név...">
			<input type="text" name="email" placeholder="Email...">
			<input type="text" name="uid" placeholder="Felhasználónév ...">
			<input type="password" name="pwd" placeholder="Jelszó...">
			<input type="password" name="pwdrepeat" placeholder="Jelszó újra...">
			<button type="submit" name="submit">Regisztrálok</button>
		</form>
		</div>
		<?php
		if(isset($_GET["error"]))
		{
			if($_GET["error"] == "emptyinput")
			{
				echo "<p>Kérem töltsön ki minden mezőt</p>";
			}
			else if ($_GET["error"] == "invaliduid")
			{
				echo "<p>Kérem válasszon megfelelő felhasználóneve</p>";
			}
			else if ($_GET["error"] == "invalidemail")
			{
				echo "<p>Kérem válasszon megfelelő email címet</p>";
			}
			else if ($_GET["error"] == "passworddontmatch")
			{
				echo "<p>A jelszavak nem egyeznek</p>";
			}
			else if ($_GET["error"] == "stmtfailed")
			{
				echo "<p>Valami probléma történt, próbálja meg újra</p>";
			}
			else if ($_GET["error"] == "usernametaken")
			{
				echo "<p>Ez a felhasználónév foglalt.</p>";
			}
			else if ($_GET["error"] == "none")
			{
				echo "<p>Sikeres regisztráció</p>";
			}
		}
	?>
    </section>

<?php
	include_once 'footer.php';
?>
</html>