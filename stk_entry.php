<?php
require 'connection.php';

  $stkid = $_POST["stkid"];
  $stkname=$_POST["stkname"];
  $stkquantity =$_POST["stkquantity"];
  $stkvendor=$_POST["stkvendor"];
  $stkprice=$_POST["stkprice"];
  
  $sqlquery = "INSERT INTO stk_entry VALUES ('$stkid', '$stkname', '$stkquantity', '$stkvendor','$stkprice')";
if(mysqli_query($connection,$sqlquery))
{
  echo "<script> alert('New record inserted Successfully'); </script>";
}
  else
  {
  echo "<script> alert('Insertion Unsucessfull'); </script>".mysqli_error($connection);

  }
  header("Location: stock_entry_reg.html");
 $connection->close();
 ?>
