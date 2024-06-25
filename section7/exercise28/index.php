<?php 
  $x = 4;
  while ($x <=30) {
    echo "That's ". $x . "<br>";
    if ($x == 24) {
      echo "End of loop";
      break;
    }
    $x += 2;
  }
?>