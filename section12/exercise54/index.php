<?php 
  class Person {
    public $name;
    public $age;

    function walk ($meters) {
      echo "The person walked $meters meters. <br>";
    }
  }

  $renan = new Person;
  $renan->name = "Renan";
  $renan->age = 32;

  echo "$renan->name tem $renan->age anos. <br>";

  $renan->walk(300);
?>