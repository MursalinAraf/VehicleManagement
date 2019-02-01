<?php

if( isset( $_POST['user_name'] ) )
{

$name = $_POST['user_name'];

$host = 'localhost';
$user = 'root';
$pass = ' ';

mysql_connect($host, $user, $pass);

mysql_select_db('db');

$selectdata = " SELECT username,name FROM users WHERE name LIKE '$name%' ";

$query = mysql_query($selectdata);

while($row = mysql_fetch_array($query))
{
 echo "<p>".$row['username']."</p>";
 echo "<p>".$row['name']."</p>";
}

}
?>