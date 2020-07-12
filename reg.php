<?php 
include "inc/connection.php"; 
if(isset($_POST["submit"])){
    header('Location:display.php');
}
?>
<!DOCTYPE HTML>
<html>  
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">


</head>
<body>
<div class="reg">
<form action="welcome_get.php" method="post">
<h2>Register</h2>

<label>First Name:</label> <input type="text" name="firstname"></br></br>
<label>Last Name :</label><input type="text" name="lastname"></br></br>
<label>Email :</label><input type="email" name=email></br></br>   
<label>Password :</label><input type="password" name="password"></br></br>
<button type="submit" name="submit">Register</button>


</form>

</div>


</body>
</html>
