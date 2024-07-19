<?php 
  
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Query
  
  // $sql = "CREATE TABLE people (name VARCHAR(255), lastname VARCHAR(255))";

  $sql = "DROP TABLE people";
  $conn->query($sql);

  $conn->close();

?>