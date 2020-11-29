<?php
session_start();
if(isset($_POST['password'])) {
  if($_POST['password'] == "mleko") {
    $_SESSION['crsf_isLogged'] = true;
    header('Location: ./account.php');
  }
  else {
    header('Location: ./login.php');
  }
}

if(isset($_GET['action']) && isset($_SESSION['crsf_isLogged'])) {
  $connection = new mysqli('localhost', 'root', '');
  $connection->query('DROP DATABASE `mleko_db1`');
  echo "ok";
}