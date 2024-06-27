<?php 
  function evenOrOdd ($number) {
    if ($number % 2 == 0) {
      echo "O número $number é par. <br>";
    } else {
      echo "O número $number é ímpar. <br>";
    }
  }

  evenOrOdd(2);
  evenOrOdd(3);
  
?>