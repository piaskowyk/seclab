<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crsf</title>
    <link rel="stylesheet" href="/seclab/helpers/assets/bootstrap.css">
</head>
<body>
  <div class="container">
    <h1>Log in</h1>
    <form method="post" action="backend.php">
      <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>