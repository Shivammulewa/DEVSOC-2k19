<?php
$conn=mysqli_connect("localhost","root","","devsoc");
if(!$conn){
	die("Conection failed:".mysqli_connect_error());

}