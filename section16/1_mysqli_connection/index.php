<?php 
  
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass2";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Check connection
  if ($conn->connect_error) {
      echo "Connection failed: " . $conn->connect_error; // or $conn->connect_error
  }
  echo "Connected successfully";

?>