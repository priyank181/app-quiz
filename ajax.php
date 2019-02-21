<?php
header('Access-Control-Allow-Origin: *');

$user = "root"; //Enter the user name
$password = ""; //Enter the password
$host = "localhost"; //Enter the host
$dbase = "db"; //Enter the database
$table = "books"; //Enter the table name


$username = mysql_real_escape_string($_GET['username']);
$numCorrect = mysql_real_escape_string($_GET['numCorrect']);
echo 'test';


$con = mysqli_connect("localhost","root","","db");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



mysqli_query($con,"INSERT INTO books (username,numCorrect) 
VALUES ('.$username','.$numCorrect')");

echo 'Details added';

mysqli_close($con);

?>
