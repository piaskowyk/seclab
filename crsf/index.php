<?php
session_start();
if(isset($_SESSION['crsf_isLogged'])) {
  header('Location: ./account.php');
}
else {
  header('Location: ./login.php');
}