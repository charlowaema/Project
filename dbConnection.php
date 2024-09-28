<?php
$hostname="localhost";
$user="root";
$password="";
$database="sacco";
$con= mysqli_connect($hostname, $user, $password, $database);
mysqli_select_db($con,'sacco') or die(mysqli_error($con));
?>