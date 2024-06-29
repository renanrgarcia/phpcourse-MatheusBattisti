<?php 
  $str = "O rato roeu a roupa do rei de Roma.";
  $counter = 0;
  for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] === 'a') { 
      $counter++;
    }
  }

  echo $counter;
?>