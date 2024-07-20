<?php
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  // Query
  $id = 5;

  // One row
  $stmt = $conn->prepare("SELECT * FROM items WHERE id = :id");
  $stmt->bindParam(":id", $id);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  print_r($result);
  echo "<br>";
  
  // Various rows 
  $stmt = $conn->prepare("SELECT * FROM items WHERE id < :id");
  $stmt->bindParam(":id", $id);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);