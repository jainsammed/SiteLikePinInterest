<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';

	$user = $_GET['user'];
	$userArray = array();

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

	$query="SELECT Username FROM  `register` ";
	$result=mysqli_query($connection,$query);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        array_push($userArray,$row['Username']);
	    }

	}
	if(in_array($user,$userArray))
		echo $user.' is not available...';
	elseif ($user=="")
		echo ' ';
	else
		echo $user.' is available...';
echo '</response>';

?>
