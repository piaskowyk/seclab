<?php
session_start();
if(isset($_SESSION['xss_isLogged'])) {
  header('Location: ./account.php');
}
else {
  header('Location: ./login.php');
}