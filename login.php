<?php
require 'connection.php';
if(!empty($_SESSION["id"]))
{
  header("Location: login.php");
}
if(isset($_POST["submit"]))
{
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($connection, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0)
  {
    if($password == $row['password'])
    {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.html");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Store Management System | Login</title>
    <link rel="icon" type="image/x-icon" href="assets/images/faviocn.png">


    <style>
      .box{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 90vh;
}

body
{
  background-image: url("images/12.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size:cover;
}

input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    outline: none;
}
input[type=password] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    outline: none;
}
#abc
{
padding-left:500px;
padding-top:80px;

}

#asdf {
  align-items: center;
	background: #0066A2;
	color: white;
	border-style: outset;
	border-color: #0066A2;
	height:23px;
	width: 50px;
	font: bold15px arial,sans-serif;
	text-shadow: none;

}





      </style>
  </head>
  <body>
    <div class="box">
    <form class="" action="" method="post" autocomplete="off">
      <!--marquee scroll amount="17">STORE MANAGEMENT SYSTEM</marquee-->

    <center><img src="images/bggs.png" alt="SVREC" width="300"></center>
  
    <center><h1>STORE MANAGEMENT SYSTEM </h1>
    <h2>LOGIN </h2>

      <label for="usernameemail">Username or Email : </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br><br>
      <label for="password">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br><br>
      <div class="display">
        <div id="asdf">
       <button type="submit" name="submit">Login</button>
</div>
      </div>
      <br>
      <div id="abc">
     <a href="forgotpassword.php">Forgotpassword</a></center>
</div>
 <br>
</div>
</form>
  </body>
</html>
