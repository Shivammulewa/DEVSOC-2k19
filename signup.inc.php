<?php
	if(isset($_POST['su'])){
		include_once 'dbh.inc.php';
		$email=mysqli_real_escape_string($conn, $_POST['email']);
		$username=mysqli_real_escape_string($conn, $_POST['username']);
		$password=mysqli_real_escape_string($conn, $_POST['password']);
		$company=mysqli_real_escape_string($conn, $_POST['company']);
		$number=mysqli_real_escape_string($conn, $_POST['number']);
		$date=mysqli_real_escape_string($conn, $_POST['date']);
		$month=mysqli_real_escape_string($conn, $_POST['month']);
		$year=mysqli_real_escape_string($conn, $_POST['year']);
		$sex=mysqli_real_escape_string($conn, $_POST['sex']);

		$sql="INSERT INTO devsoc(email,username,passward,company_name,phone_num,dates,month,years,sex)
		VALUES('$email','$username','$password','$company','$number','$date','$month','$year','$sex')";
		$result=mysqli_query($conn,$sql);
		header("Location: devsoclogin.php");



	}
?>