<?php 
  $ranking = [
    "Renan" => 17,
    "Thais" => 50,
    "Joaquim" => 19,
    "Maria" => 22
  ];

  arsort($ranking);
?>

<h1>Ranking</h1>

<ol>
  <?php foreach ($ranking as $name => $score): ?>
    <li><?= $name . " => " . $score ?></li>
  <?php endforeach; ?>
</ol>