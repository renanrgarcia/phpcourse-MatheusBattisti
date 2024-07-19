<?php 
  
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Query
  $name = "Notebook";
  $description = "Lenovo Ideapad";

  $stmt = $conn->prepare("INSERT INTO items (name, description) VALUES (?, ?)");

  $stmt->bind_param("ss", $name, $description); // s = string, i = int, d = double

  $stmt->execute();

  $stmt->close();
?>