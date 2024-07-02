<?php 
  $name = "John";
  $age = 30;
  $work = "Developer";

  $arr = compact("name", "age", "work");

  print_r($arr);