<?php 
  function marketList($list) {
    $str = "You took the follow items: ";

    for ($i = 0; $i < count($list) - 1; $i++) {
      $str .= "$list[$i], ";
    }

    $lastItem = $list[count($list)-1];
    $str .= "$lastItem.";
    return $str;
  }

  $list = ["rice", "beans", "milk", "bread", "chicken", "beef", "fish", "eggs", "cheese", "yogurt", "sugar", "butter", "oil"];
  echo marketList($list);
?>