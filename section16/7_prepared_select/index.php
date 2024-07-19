<?php 
  
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Query
  $id = 3;

  // Various rows

  $stmt = $conn->prepare("SELECT * FROM items WHERE id > ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $data = $result->fetch_all();


  print_r($data);
  echo "<br>";

  // One row

  $stmt = $conn->prepare("SELECT * FROM items WHERE id =?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_row();
  $conn->close();

  print_r($row);

?>