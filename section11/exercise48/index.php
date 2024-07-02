<?php 
  $arr = ["potato", "tomato", "onion", "carrot", "cucumber"];
  print_r($arr);
  echo "<br>";
  $splice = array_splice($arr, 2, 3);

  print_r($splice);
  echo "<br>";
  print_r($arr);
?>