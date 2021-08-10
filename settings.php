<?php
 include_once 'menu.php';
 include_once ('includes\dbh.inc.php');
 $sql="SELECT * FROM users";
 $result = mysqli_query($conn, $sql);
?>

<form action="" method="post">
	<ul>
		<li>Név<input type="text" name="felnev"></li>
		<li>Position<input type="text" name="poznev"></li>
		<li><input type="submit" value="update"></li>
	</ul>
</form>

<?php
include_once 'footer.php';
?>