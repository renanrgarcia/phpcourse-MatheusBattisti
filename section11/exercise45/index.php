<?php 
  $arr = range(10, 45);

  for ($i = 0; $i < count($arr); $i++) {
    $new_item = $arr[$i] + 6;

    if ($new_item > 30) {
      print $new_item . ". It's over 30! <br>";
    } else {
      print $new_item . "<br>";
    }
  }
?>