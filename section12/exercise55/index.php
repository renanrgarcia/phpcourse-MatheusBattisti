<?php 
  class Car {
    public $name;
    public $brand;
    public $max_velocity;

    function setMaxVelocity ($velocity) {
      $this->max_velocity = $velocity;
    }

    function getMaxVelocity () {
      return $this->max_velocity;
    }
  }

  $uno = new Car;
  $uno->name = "Uno";
  $uno->brand = "Fiat";
  $uno->setMaxVelocity(200);
  $max_velocity = $uno->getMaxVelocity();
  echo "The car name is $uno->name, by $uno->brand. The max velocity is $max_velocity.";
?>