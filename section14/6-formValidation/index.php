<?php 
  $validations = [];

  if(count($_POST) > 0) {
    if($_POST["username"] == "") {
      $validations[] = "Please enter your username!";
    }
    if($_POST["email"] == "") {
      $validations[] = "Please enter your email!";
    }
    if($_POST["password"] != $_POST["confirmation"]) {
      $validations[] = "The passwords don't match!";
    }
  }
  echo count($_POST);
  print_r($_POST);
  echo count($validations);
  print_r($validations);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if(count($validations)): ?>
    <ul>
      <?php foreach($validations as $validation): ?>
        <li><?= $validation ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <form action="index.php" method="POST">
    <div>
      <input type="text" name="username" placeholder="Enter your username">
    </div>
    <div>
      <input type="email" name="email" placeholder="Enter your email">
    </div>
    <div>
      <input type="password" name="password" placeholder="Enter your password">
    </div>
    <div>
      <input type="password" name="confirmation" placeholder="Confirm your password">
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>
  </form>
</body>
</html>