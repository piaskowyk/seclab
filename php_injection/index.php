<?php
if(isset($_GET['page'])) {
  include $_GET['page'];
}
else {
  include 'page1.php';
}
?>