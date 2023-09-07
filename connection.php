<?php
$hostname='localhost';  //127.0.0.1
$username='root';
$password='';
$database='store';

//create a connection 
$connection=mysqli_connect($hostname,$username,$password,$database);

//check if the connection was succesfull
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
  echo "";
  ?>

