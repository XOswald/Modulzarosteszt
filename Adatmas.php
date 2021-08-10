<?php
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
	
	$allowed = array('jpg', 'jpeg', 'png', 'pdf');
	
	if(in_array($fileActualExt, $allowed))
	{	
		if($fileError === 0)
		{
			if($fileSize < 1000000)
			{	
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination ='uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
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