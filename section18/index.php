<?php

include_once("db.php");
include_once("dao/CarDAO.php");

$carDAO = new CarDAO($conn);

$cars = $carDAO->findAll();

?>

<h1>Insert a car:</h1>

<form action="process.php" method="POST">
  <input type="hidden" name="type" value="create">
  <div>
    <label for="brand" class="form-label">Brand</label>
    <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand">
  </div>
  <div>
    <label for="km" class="form-label">Km</label>
    <input type="text" class="form-control" id="km" name="km" placeholder="Km">
  </div>
  <div>
    <label for="color" class="form-label">Color</label>
    <input type="text" class="form-control" id="color" name="color" placeholder="Color">
  </div>
  <input type="submit" class="btn btn-primary" value="Submit">
</form>
<ul>
  <?php foreach ($cars as $car) : ?>
  <li>
    <?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?>
  </li>
  <?php endforeach; ?>
</ul>