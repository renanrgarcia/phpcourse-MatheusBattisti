<?php 
  $arr = [
    ["a", "b", "c", "d"], 
    ["e", "f", "g", "h"], 
    ["i", "j", "k", "l"],
  ];

  for ($i = 0; $i < count($arr); $i++) {
    echo "Printing array: " . $i + 1 . "<br>";
    for ($j = 0; $j < count($arr[$i]); $j++) {
      echo $arr[$i][$j] . "<br>";
    }
  }
?>