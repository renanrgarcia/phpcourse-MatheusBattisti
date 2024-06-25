<?php 
  $numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

  $i = 0;

  while ($i < count($numbers)) {
    $actualNumber = $numbers[$i];
    
    if ($actualNumber == 30 || $actualNumber == 40) {
      $i++;
      continue;
    }
    echo $actualNumber . "<br>";
    $i++;
  }
?>