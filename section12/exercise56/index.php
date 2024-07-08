<?php 
  class Human {
    public $name;
    public $age;

    public function talk ($speech) {
      echo $speech . "<br>";
    }
  }

  class Teacher extends Human {
    public $discipline = "German";

    public function lecture () {
      echo "The teacher $this->name teaches $this->discipline. <br>";
    }
  }

  $ronaldo = new Teacher;
  $ronaldo->name = "Ronaldo";
  $ronaldo->age = 48;
  $ronaldo->talk("I work at the school.");
  $ronaldo->lecture();
?>