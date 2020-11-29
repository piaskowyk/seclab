<?php
session_start();
if(!isset($_SESSION['xss_isLogged'])) {
  header('Location: ./login.php');
}

$db = [
  'mleko',
  'pies',
  'dzik',
  'elo elo',
  'komputer',
  'test 1',
  'test 2',
  'qwertyuiopasdfghjklzxcvbnm'
];

$resultSet = [];
$phrase = "";
if(isset($_GET['search']) && $_GET['search'] != "") {
  $phrase = $_GET['search'];
  foreach($db as $item) {
    if(strpos($item, $phrase) !== false) {
      $resultSet[] = $item;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XSS</title>
  <link rel="stylesheet" href="/seclab/helpers/assets/bootstrap.css">
</head>
<body>
  <div class="container">
    <h1>Dashboard</h1>
    <form method="get">
      <div class="form-group">
        <label for="search">Search</label>
        <input type="text" class="form-control" id="search" name="search">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br />
    <div>
      <h4>Reslut for "<?php echo $phrase; ?>":</h4>
      <br />
      <ul>
      <?php
        foreach($resultSet as $item) {
          echo "<li>{$item}</li>";
        }
      ?>
      <ul>
    </div>
  </div>
</body>
</html>