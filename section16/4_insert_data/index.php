<?php 
  
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Query
  $table = "items";
  $name = "Tea";
  $description = "Hot black tea";

  $sql = "INSERT INTO $table (name, description) VALUES ('$name', '$description')";

  $conn->query($sql);

  $conn->close();

?>