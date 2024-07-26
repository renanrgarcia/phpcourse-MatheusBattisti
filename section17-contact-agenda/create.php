<?php
include_once("templates/header.php");
?>
<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Create contact</h1>
  <?php if (isset($printMsg) && $printMsg != '') : ?>
  <p id="msg"><?= $printMsg ?></p>
  <?php endif; ?>
  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $name ?? '' ?>"
        required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone"
        value="<?= $phone ?? '' ?>">
    </div>
    <div class="form-group">
      <label for="observations">Observations</label>
      <textarea class="form-control" name="observations" id="observations" cols="30" rows="10"
        placeholder="Enter observations"><?= $observations ?? '' ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php
    include_once("templates/footer.php");
    ?>