<?php 
  function sevenPlus ($arr) {
    $newArr = [];
    for ($i = 0; $i <count($arr); $i++) {
      if ($arr[$i] > 7) {
        array_push($newArr, $arr[$i]);
      }
    }
    return $newArr;
  }

  $array = [];

  for ($i = 0; $i <= 25; $i++) {
    array_push($array, $i);
  }

  print_r(sevenPlus($array));


?>