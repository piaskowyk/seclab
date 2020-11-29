<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = file_get_contents('./db1.sql');
foreach(explode(';', $sql) as $query) {
  if($query == "") break;
  if ($conn->query($query) === TRUE) {
    echo "OK";
  } else {
    echo "Error: " . $conn->error;
  }
}

$sql = file_get_contents('./db2.sql');
foreach(explode(';', $sql) as $query) {
  if($query == "") break;
  if ($conn->query($query) === TRUE) {
    echo "OK";
  } else {
    echo "Error: " . $conn->error;
  }
}

$conn->close();
?>