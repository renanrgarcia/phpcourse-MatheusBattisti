<?php 
  $arr = ["foo", "bar", "baz", true, 1, 3, 6, 12.5, 5.3, 8.9];

  $counter = 0;
  while ($counter < count($arr)) {
    if (is_string($arr[$counter])) {
      echo $arr[$counter] . "<br>"; 
    }
    $counter++;
  }

?>