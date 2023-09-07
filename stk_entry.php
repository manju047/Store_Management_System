<?php
require 'connection.php';

  $stkid = $_POST["stkid"];
  $stkname=$_POST["stkname"];
  $stkquantity=$_POST["stkquantity"];
  $stkvendor=$_POST["stkvendor"];
  $stkprice=$_POST["stkprice"];

  $sqlquery = "INSERT INTO stk_entry (stkid,stkname,stkquantity,stkvendor,stkprice) VALUES ('$stkid', '$stkname', '$stkquantity', '$stkvendor','$stkprice')";
  if ($connection->query($sqlquery) == TRUE)
   {
    // Data inserted successfully, generate popup message
    echo '<script type ="text/JavaScript">';  
    echo 'alert(" New Record Inserted Sucessfully..!! ")';  
    echo '</script>'; 
     }  
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

 $connection->close();
 
 ?>
