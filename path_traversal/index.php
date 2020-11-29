<?php
if(isset($_GET['page'])) {
  echo file_get_contents($_GET['page']);
}
else {
  echo file_get_contents('page1.php');
}
?>