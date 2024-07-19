<?php 
  
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Query
  $sql = "SELECT * FROM items";
  $result = $conn->query($sql);

  print_r($result);

  $conn->close();

?>