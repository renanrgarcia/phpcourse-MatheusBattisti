<?php 
  function priceList ($array) {
    $new_arr = [];
    foreach ($array as $item => $price) {
      if ($price > 10) {
        array_push($new_arr, $item);
      }
    }

  return $new_arr;
  }

  $arr = [
    'carro' => 1000, 
    'bola' => 3, 
    'sofá' => 200, 
    'cafeteira' => 5
  ];
  print_r(priceList($arr));
?>