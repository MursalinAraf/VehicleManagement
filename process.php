<?php

session_start();
require_once("config.php");

$uname=$_POST['un'];
$pw=$_POST['ps'];



$lq="SELECT * FROM users WHERE name='$uname' AND pass='$pw'";

$sq=mysqli_query($con,$lq);

$row=mysqli_fetch_array($sq);





if(!empty($row))
{
	

	if($uname==$row[name] && $row[pass]==$pw)
	{
       
       
           $_SESSION=array();

           $_SESSION['un']=$row[name];
            $_SESSION['ps']=$row[pass];

            header("Location:project.php");

            



	}
	else
	{
         echo("Wrong Username And Password");
	}


}
else
{
	 echo("Wrong Username And Password");
}



?>