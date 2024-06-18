<?php 
  $car = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
  ];

  print_r($car);
  echo "<br>";
  $brand = $car["brand"];
  $model = $car["model"];
  $year = $car["year"];
  echo "Brand: $brand, Model: $model, Year: $year";  
?>