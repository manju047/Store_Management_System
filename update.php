<?php
require 'connection.php';

// Retrieve data from the form
  $stkid = $_POST["stkid"];
  //$stkname=$_POST["stkname"];
  $stkquantity=$_POST["stkquantity"];
  $stkvendor=$_POST["stkvendor"];
  $stkprice=$_POST["stkprice"];

// Check if the product already exists in the database
$sql = "SELECT * FROM stocktable WHERE stkid = '$stkid '";
$result = $connection->query($sql);
    if ($result->num_rows > 0)
     {
    // Product already exists, update the stkquantity
    $updateSql = "UPDATE stocktable  SET stkquantity=$stkquantity,stkvendor='$stkvendor',stkprice=$stkprice WHERE stkid= $stkid";
    if ($connection->query($updateSql) === TRUE) 
       {
        // Data updated successfully, generate popup message
        echo "<script>alert('Data updated successfully');</script>";
        } else 
            {
               echo "Error updating record: " . $connection->error;
             }
    } 
  else 
    { 
    // Product doesn't exist, insert it as a new record
    $insertSql = "INSERT INTO store(stkid,stkquantity) VALUES ('$stkid', $stkquantity)";
    if ($connection->query($insertSql) === TRUE)
    {
        // Data inserted successfully, generate popup message
        echo "<script>alert('Data entered successfully');</script>";
    } 
    else
        {
        echo "Error inserting record: " . $conn->error;
         }
        
}

// Close the connection
$connection->close();
?>
