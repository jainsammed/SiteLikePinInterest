<?php

	session_start();
	if(isset($_SESSION['username']))
	{
		$photo=$_POST['photo'];

		$localhost="localhost";
		$localhostuser="root";
		$password="";
		$db="hello";

		$connection=mysqli_connect($localhost,$localhostuser,$password,$db);

		if(!$connection)
		{
			echo "Connection Error";
			exit();
		}

		$username=$_SESSION['username'];

		if(isset($_POST["submit"]))
		{
			 $file = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
			 $query = "INSERT INTO `photo`(`Username`,`Photo`) VALUES ('$username','$file')";
			 $result=mysqli_query($connection, $query);
			 if($result)
			 {
				 header("Location: ../profile.php?success");
			 }
		}

	}

?>
