<?php 
  $arr = [];

  for ($i = 10; $i <= 20; $i++) {
    array_push($arr, $i);
  }

  print_r($arr);
  echo "<br>";

  for ($j = 0; $j < count($arr); $j++) {
    if ($arr[$j] % 2 != 0) {
      echo "Número ímpar $arr[$j] <br>";
    }
  }
?>