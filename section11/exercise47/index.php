<?php 
  $car = ["jaguar", "3.0", "blue", 2, "solar rooftop", "automatic"];

  list($name, $power, $color, $doors, $features, $transmission) = $car;

  echo "The car is a " . $name . " with " . $doors . " doors. It has a power of " . $power . "hp. It has a " . $color . " color. It has " . $features . " and a " . $transmission . " transmission. ";
?>