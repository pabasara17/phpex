<?php
include "inc/connection.php";
//$id=$_REQUEST['id'];
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email=$_REQUEST['email'];

//taking values as user inputs
$sql = "INSERT INTO user (first_name,last_name,email)
VALUES ('$firstname','$lastname','$email')";

if ($conn->query($sql) === TRUE) {
  echo "<script> alert(New record created successfully)</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



/*$sql = "SELECT Name, Email FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: = " . $row['Name'];
     echo "email:= " . $row['Email'];
      echo "<br>";
  }
} else {
  echo "0 results";
}

$sql = "UPDATE form SET name='Nipun';

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}*/
$conn->close();
?>