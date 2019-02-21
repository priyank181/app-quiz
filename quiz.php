<?php

//Block 1
$user = "root"; //Enter the user name
$password = ""; //Enter the password
$host = "localhost"; //Enter the host
$dbase = "db"; //Enter the database
$table = "books"; //Enter the table name

//Block 2
$username= $_POST['username'];
$numCorrect= $_POST['numCorrect'];
echo 'test';

//Block 3
$con = mysqli_connect("localhost","root","","db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//mysql_select_db($database, $connection);


//Block 4

mysqli_query($con,"INSERT INTO books (username,numCorrect) 
VALUES ('.$username','.$numCorrect')");

//Block 6
echo 'Details added';

//Block 7
mysqli_close($con);

?>
