<?php

require_once("config.php");

$name=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];
$roll=$_POST['roll'];
$department=$_POST['department'];
$section=$_POST['section'];
$cgpa=$_POST['cgpa'];
$var=0;

$query="INSERT into users VALUES('$name','$password','$email','$var','$roll','$department','$section','$cgpa')";
$sq=mysqli_query($con,$query);



if($sq)
{
	header("Location:login.php");
}
else
{
	echo("Failed<br>");
}






?>