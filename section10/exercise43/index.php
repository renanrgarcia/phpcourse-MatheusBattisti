<?php 
  $str = "carro - navio - helicóptero - barco - jangada";
  $strToArr = explode("-", $str);

  for ($i = 0; $i < count($strToArr); $i++) {
    echo $strToArr[$i] . "<br>";
  }
?>