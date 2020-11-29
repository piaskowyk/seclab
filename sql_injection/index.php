<?php
if(isset($_POST['login']) && isset($_POST['password'])) {
  $connection = new mysqli('localhost', 'root', '', 'mleko_db2');
  $result = $connection->query("select * from user where login='{$_POST['login']}' and password='{$_POST['password']}'");
  if($result->num_rows > 0) {   
    echo "select * from user where login='{$_POST['login']}' and password='{$_POST['password']}'";
    echo "<br />";
    echo "You are logged in!";
  }
  else {
    echo "Incorrect data";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>injection</title>
  <link rel="stylesheet" href="/seclab/helpers/assets/bootstrap.css">
</head>
<body>
  <div class="container">
    <h1>Log in</h1>
    <form method="post">
      <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>