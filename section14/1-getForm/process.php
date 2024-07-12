<?php 
  if (isset($_GET["name"])) {
    $name = $_GET["name"];
    $age = $_GET["age"];
  } else {
    $name = "null";
    $age = "null";
  }
  
?>

<h1>Your name is <?= $name ?> and you are <?= $age ?> years old.</h1>