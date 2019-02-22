<?php

if (isset($_POST['si'])) {

	include 'dbh.inc.php';

	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$pass=mysqli_real_escape_string($conn, $_POST['password']);

	
		$sql="SELECT  * FROM devsoc WHERE email='$email'";
		$result= mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if(($email==$row['email']) and ($pass==$row['passward'])){
			header("Location: successful.php");
		}
		else{
			header("Location: devsoclogin.php");
		}
		}

