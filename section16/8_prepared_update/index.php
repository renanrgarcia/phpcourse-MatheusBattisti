<?php 
  
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Query
  $id = 10;
  $name = "Wallet";
  $description = "Empty, but hopeful";

  // Various rows

  $stmt = $conn->prepare("UPDATE items SET name = ?, description = ? WHERE id = ?");
  $stmt->bind_param("ssi", $name, $description, $id);
  $stmt->execute();
  $conn->close();

  if($stmt->error) {
    echo "Error: " . $stmt->error;
  }

?>