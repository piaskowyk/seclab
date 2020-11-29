<?php
session_start();

if(!isset($_SESSION['crsf_isLogged'])) {
  header('Location: ./login.php');
}

$_SESSION["csrf_token"] = random_bytes(64);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crsf</title>
  <link rel="stylesheet" href="/seclab/helpers/assets/bootstrap.css">
</head>
<body>
  <div class="container">
    <h1>DB management</h1>
    <a href="#">Add user</a> | 
    <a href="#">Delete user</a> | 
    <a href="#">Edit user</a>
    <h1>WARNING - DANGEROUS! - only for super users</h1>
    <a href="./backend.php?action=drop&crsfToken="<?php echo $_SESSION["csrf_token"]; ?>>Drop DB</a>
  </div>
</body>
</html>