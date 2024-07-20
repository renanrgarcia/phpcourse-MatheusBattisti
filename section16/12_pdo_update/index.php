<?php
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  // Query
  $name = "Submarine";
  $description = "Yellow Submarine";
  $id = 5;

  $stmt = $conn->prepare("UPDATE items SET name = :name, description = :description WHERE id = :id");
  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":description", $description);
  $stmt->bindParam(":id", $id);
  $stmt->execute();