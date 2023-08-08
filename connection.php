<?php
$hostname='localhost';  //127.0.0.1
$username='root';
$password='';
$database='reglog';

//create a connection 
$connection=mysqli_connect($hostname,$username,$password,$database);

//ceck if the connection was succesfull
if(!$connection)
{
    die('connection failed:'.mysqli_connect_error());

}
else
{
     
}
?>