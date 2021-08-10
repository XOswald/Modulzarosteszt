<?php
 include_once 'menu.php';
 include_once 'includes\dbh.inc.php';
?>

<?php
		if(isset($_GET['usersId'])) {
			$id=$_GET['usersId'];
			
			$sql = mysqli_query("SELECT 'usersName', 'usersPosition' FROM users WHERE PART_ID='$id'");
			$count=mysqli_num_rows($sql);
			if($count >0) {
				while($row =mysqli_fetch_array($sql)) {
			}
	
?>
	<link href="css/style - profile-crumbs.view.css" rel="stylesheet">
	<h2>Profil</h2>
	<div class="row">
	<div class="col-sm-3 col-md-3">
		<form action="Upload - Pic.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="submit">Módosítás</button>
		</form>
		<img class="rounded-circle" style="width: 240px; height: 240px;" src="images/profilimages/profile.png" data-holder-rendered="true">
		</div>
		<div class="col-sm-8 col-md-9 bg-light p-2">
			
			<table class="table table-hover table-striped">
				<tr><th>Felhasználónév:</th>
				<td><?php echo $row['usersName']; ?></td></tr>
				<tr><th>Pozíció:</th>
				<td><?php echo $row['usersPosition']; ?></td></tr>
				<tr><th>Fájl feltöltése:</th>
				<td>
					<form action="Upload - File.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="file">
				<button type="submit" name="submit">Feltöltés</button>
				</form></td></tr>
				<tr><th><a href="settings.php">Beállítások</a></th>
				<td>
					<form action="" method="post">
				<tr><th>Név</th>
				<td><input type="text" name="felnev"></td></tr>
				<tr><th>Position</th>
				<td><input type="text" name="poznev"></td></tr>
				<th><input type="submit" value="update"></th>
				</form> 
				</tr></td>
<?php
		}			
	}
?>
			</table>		
		</div>
	</div>					