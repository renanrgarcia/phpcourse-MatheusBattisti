<?php 
  $user = [
    "name" => "Renan",
    "age" => 22,
    "work" => "Developer"
  ];

  if($user) {
    $name = $user["name"];
    $age = $user["age"];
    $work = $user["work"];
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
  <form action="index.php" method="POST">
    <div>
      <input type="text" name="name" placeholder="Enter your name" value="<?= $name ?>"> 
    </div>
    <div>
      <input type="text" name="age" placeholder="Enter your age" value="<?= $age ?>">
    </div>
    <div>
      <input type="text" name="work" placeholder="Enter your work" value="<?= $work ?>">
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>
  </form>
</body>
</html>