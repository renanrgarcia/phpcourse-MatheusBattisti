<?php 
  
  $host = "database-container";
  $user = "root";
  $pass = "php_mysql_pass";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // Query
  $sql = "SELECT * FROM items";

  $result = $conn->query($sql);
  $conn->close();

  $item = $result->fetch_assoc();
  $itens = $result->fetch_all();

  print_r($item);
  echo "<br>";
  print_r($itens);


?>