<?php
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  // Query
  $id = 9;

  $stmt = $conn->prepare("DELETE FROM items WHERE id = :id");
  $stmt->bindParam(":id", $id);
  $stmt->execute();
