<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="register.php" method="post">
    <div>
      <input type="text" name="brand" placeholder="Car brand"><br>
    </div>  
    <div>
      <input type="text" name="price" placeholder="Car price"><br>
    </div>
    <div>
      <input type="checkbox" name="optionals[]" value="Sunroof"> Sunroof<br>
    </div>
    <div>
      <input type="checkbox" name="optionals[]" value="Film"> Film<br>
    </div>
    <div>
      <input type="checkbox" name="optionals[]" value="Armored"> Armored<br>
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>  
  </form>
</body>
</html>