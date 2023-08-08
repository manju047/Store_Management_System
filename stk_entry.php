<?php
require 'connection.php';
if(!empty($_SESSION["id"]))
{
  header("Location: stock_entry_reg.html");
}

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
  




 //prepare and bind the statement
/*$stmt=$connection->prepare($sqlquery);
 $stmt->bind_param($id,$name, $qty,$vname,$price);
 //execut the statement
 if($stmt->execute())
 {
  echo "New record is inserted sucessfully";
 }
 else
 {
  echo "Error".$sqlquery."<br>".$connection->error;
 }

 //close the statement and connection
 //$stmt->close();*/
 $connection->close();
 ?>
