<?php 
  class Pessoa {
    public $nome; // Define the $nome property

    function falar() {
        echo "Estou falando";
    }
}

$renan = new Pessoa();

$renan->nome = "Renan";

echo $renan->nome;

echo "<br>";

$renan->falar();
?>