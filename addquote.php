<?php
include('credentials.php');
$id = "0";
$naam = $_POST["naam"];
$quote = $_POST["quote"];
$sql = "INSERT INTO quotes (ID,naam,quote) VALUES ('$id','$naam','$quote')";

// Create connection
$conn = new mysqli($servername, $username, $password, $table);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

echo "Connected successfully";
echo "<meta http-equiv=REFRESH CONTENT=0;url='quotes.php'>";
?> 