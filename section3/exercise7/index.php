<?php 
  class Person {
    public $name;
    public $age;

    function underage() {
      $age = $this->age;
      $name = $this->name;
      if ($age < 18) {
        return "$name is underage";
      }
      else {
        return "$name is not underage";
      }
    }
  }

  $pessoa1 = new Person();
  $pessoa1->name = "Renan";
  $pessoa1->age = 17;
  echo $pessoa1->underage();

  echo "<br>";

  $pessoa2 = new Person();
  $pessoa2->name = "Thaís";
  $pessoa2->age = 19;
  echo $pessoa2->underage();
?>