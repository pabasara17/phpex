<?php include "inc/connection.php" ?>
<!DOCTYPE html>
<head>
     <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="login">

       <?php  
        if(isset($errors) && !empty($errors)){
            echo '<p class="error">Invalid username /Password </p>';
        }
         ?>
         
        <form action="index.php" method="post">

        <h2>Log In</h2>

        <label>User Name :</label> <input type="text" name="email" placeholder="Email Address"></br></br>
       <!-- <label>Last Name :</label><input type="text" name="lastname"></br></br>
        <label>Email :</label><input type="email" name=email></br></br> -->   
        <label>Password :</label><input type="password" name="password"></br></br>
        <button type="submit" name="submit">Log In</button>


        </form>

    </div>
    

</body>


 </html>
