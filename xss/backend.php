<?php
session_start();
if(isset($_POST['password']) && $_POST['password'] == "mleko") {
  $_SESSION['xss_isLogged'] = true;
  header('Location: ./account.php');
}
else {
  header('Location: ./login.php');
}