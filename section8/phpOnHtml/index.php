<?php 
  include_once "backend.php";
?>

<h1>Welcome to my website</h1>
<h2><?= $name ?> see our products:</h2>

<ul>
  <?php foreach($products as $product): ?>
    <li><?= $product ?></li>
  <?php endforeach ?>
</ul>