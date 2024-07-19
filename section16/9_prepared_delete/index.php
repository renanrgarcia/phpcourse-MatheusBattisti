<?php 
  
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Query
  $name = "Test";

  // Various rows
  $stmt = $conn->prepare("DELETE FROM items WHERE name = ?");
  $stmt->bind_param("s", $name);
  $stmt->execute();
  $conn->close();