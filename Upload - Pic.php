<?php
session_start();
include_once 'includes\dbh.inc.php';
$id = $_SESSION['id'];
	
if (isset($_POST['submit']))
{
	$file=$_FILES['file'];
	
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg', 'jpeg', 'png');
	
	if(in_array($fileActualExt, $allowed))
	{	
		if($fileError === 0)
		{
			if($fileSize < 1000000)
			{	
				$fileNameNew = "profile".$id.".".$fileActualExt;
				$fileDestination ='images/profilimages/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "UDPADE profileimg SET status=0 WHERE userid='$id';";
				$result= mysqli_query($conn, $sql);
				header("Location: profil.php?uploadsuccess");
			}
			else
			{
				echo "Túl nagy méretű a fájl!";
			}
		}
		else
		{
			echo "Probléma történt a fájl feltöltése közben!";
		}
	}
	else
	{
		echo "Ezt a típusú fájlt nem töltheted fel!";
	}
}