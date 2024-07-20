<?php
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  // Query
  $name = "Bottle";
  $description = "Message in a bottle";

  $stmt = $conn->prepare("INSERT INTO items (name, description) VALUES (:name, :description)");
  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":description", $description);
  $stmt->execute();