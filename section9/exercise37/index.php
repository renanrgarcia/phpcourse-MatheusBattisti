<?php 
  function defineCarColor ($color = "red") { 
    return "This is the car color: $color. <br>";
  }

  echo "Default parameter - " . defineCarColor();
  echo "Blue parameter - " . defineCarColor("blue");

?>