<?php

	$username=$_POST['username'];
	$pass=md5($_POST['password']);

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

	$query="SELECT * FROM `register` WHERE Username='$username' AND Password='$pass'";

	$result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);


	if ($result->num_rows > 0) {
	    // output data of each row

	    while($row = $result->fetch_assoc()) {

			session_start();

			$_SESSION['username']=$row['Username'];
			$_SESSION['name']=$row['Name'];

			if(isset($_POST['remember']))
			{
				setcookie('username', $username, time()+86400, '/');
				$_COOKIE['username'] = $username; //error
			}

			header("Location: ../profile.php");
	    }

	}

	else {
			header("Location: ../login.php?loginfail");
		}

?>
