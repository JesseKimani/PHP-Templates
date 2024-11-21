<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkboxes</title>
  <style>
  </style>
</head>
<body>
  <form action="checkboxes.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
    <input type="checkbox" name="foods[]" value="Fries">Fries<br>
    <input type="checkbox" name="foods[]" value="Beef">Beef<br>
    <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br><br>

    <input type="submit" name="submit" value="Order">

  </form><br>
</body>
</html>

<?php
  if (isset($_POST["submit"])) {
    $foods = $_POST["foods"];
    // echo $foods[1];

    foreach($foods as $food) {
      echo $food . "<br>";
    }
  }

?>
