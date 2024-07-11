<?php 
  $method = $_SERVER["REQUEST_METHOD"];

  if(isset($_POST["name"])) {
    $name = $_POST["name"];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if ($method == "GET"): ?>
  <form action="index.php" method="POST">
    <div>
      <input type="text" name="name" placeholder="Enter your name">
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>
  </form>
  <?php else: ?>
  <h1>Name: <?= $_POST["name"] ?></h1>
  <?php endif; ?>
</body>
</html>