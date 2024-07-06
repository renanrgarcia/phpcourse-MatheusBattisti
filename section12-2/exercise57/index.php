<?php 
  class Dog {
    public $name;
    public $weight;

    function __construct($name, $weight) {
      $this->name = $name;
      $this->weight = $weight;
    }

    public function showProps() {
      echo "The dog name is $this->name and weights $this->weight Kg.";
    }
  }

  $dogao = new Dog("Bob", 30);
  $dogao->showProps();
?>