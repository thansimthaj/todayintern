<?php

$hostname="localhost";
$username="root";
$password="";
$database="jookebox";

$conn=mysqli_connect($hostname,$username,$password,$database);
if (!$conn) {
	echo "connection error";
}

?>