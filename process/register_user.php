<?php

	$name=$_POST['name'];
	$email=$_POST['email'];
	$username=$_POST['username'];
    $age=$_POST['age'];
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

	$userArray = array();

	$query1="SELECT Username FROM  `register` ";
	$result1=mysqli_query($connection,$query1);

	if ($result1->num_rows > 0) {
	    // output data of each row
	    while($row = $result1->fetch_assoc()) {
	        array_push($userArray,$row['Username']);
	    }

	}

	if(in_array($username,$userArray))
	{
		header('Location: ../register.php?useralready=exists');
		exit();
	}

	else {

			$query2="INSERT INTO `register`(`Name`,`Email`,`Username`,`Age`,`Password`) VALUES ('$name','$email','$username','$age','$pass')";
			$result2=mysqli_query($connection,$query2);
			if($result2)
			{
				header('Location: ../login.php?details=sent');
			}
			else
			{

			}

	}

	mysqli_close($connection);

?>
