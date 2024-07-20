<?php
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);