<html>
<head><title>display db in table</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<table>
<tr>
    <th>id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Last Login</th>
</tr>
<?php  
include "inc/connection.php";
$sql = "SELECT id,first_name,last_name,email,last_login FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["id"]."</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"]."</td><td>" 
      .$row["email"] . "</td><td>" .$row["last_login"] . "</td></tr>";
    /*echo "id: = " . $row['id']; echo"<br>";
    echo "firstname: = " . $row['first_name'];
    echo"<br>";
    echo "lastname: = " . $row['last_name'];
    echo"<br>";
    echo "email:  = " . $row['email'];
      echo "<br>";*/
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>
</table>
</body>
</html>





