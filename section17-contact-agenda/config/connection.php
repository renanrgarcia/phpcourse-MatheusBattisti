<?php

$host = "database-container";
$user = "root";
$pass = "php_mysql_pass";
$db = "contact_agenda";

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
