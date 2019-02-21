<?php

$user = "root"; //Enter the user name
$password = ""; //Enter the password
$host = "localhost"; //Enter the host
$dbase = "db"; //Enter the database
$table = "books"; //Enter the table name



$username= $_POST['resultname'];
echo 'test';


$con = mysqli_connect("localhost","root","","db");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * from books where username='"+username+"'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> Username: ". $row["username"]. " - Result: ". $row["numCorrect"]. "<br>";
    }
} else {
    echo "0 results";
}



echo 'Search done';

mysqli_close($con);

?>
