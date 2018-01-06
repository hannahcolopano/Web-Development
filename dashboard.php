<?php

$user =$_POST['username'];
$pass =$_POST['password'];

if (strlen ($user)==0 || strlen ($pass)== 0) {
	header("Location: form.php?error");
}
else{ 
	//greet the user
	echo "Welcome $user. i know your password";
	
	//check if the password adn user is the correct
	//connect to db
	$conn = mysqli_connect ("localhost","root","","cms");
	//check if the connection is OK
	if (!$conn){
		echo "error connecting the MYSQL Server.";
	}
	//else{
			//echo "ok";
	//}
	$sql = "SELECT *FROM users WHERE
			username= ' " .$user." ' AND password= '".sha1($pass)."' ";
	echo $sql;
	//execute sql
	$result = mysqli_query($conn, $sql);
	
	//process the result
	if ($myrow =mysqli_fetch_array($result))
		echo "ok";
	else
		echo "You have entered invalid username and password";
	}
	
?>