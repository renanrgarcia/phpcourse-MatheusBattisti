<?php 
  class Dog {
    function walk ($meters) {
      echo "The dog walked $meters meters. <br>";
    }

    function bark () {
      echo "The dog is barking. <br>";
    }
  }

  $dog1 = new Dog;
  $dog2 = new Dog;

  $dog1->bark();
  $dog2->walk(100);
?>