<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circle</title>
</head>
<body>
  <form action="circle-maths.php" method="post">
    <label for="">Enter Radius:</label><br>
    <input type="text" name="radius"><br><br>

    <input type="submit" value="Calculate">
  </form><br><br>
</body>
</html>

<?php
  $radius = $_POST["radius"];
  
  $circumference = null;
  $area = null;
  $volume = null;

  $circumference = round((2 * pi() * $radius), 2); //C =  2 pi r
  $area = pi() * pow($radius, 2); // A = pi radius squared
  $volume = (4 / 3) * pi() * pow($radius, 3); // V = 4/3 pi radius cubed

  echo"Circumference = {$circumference}cm <br>";
  echo"Area = {$area}cm <br>";
  echo"Volume = {$volume}cm <br>";

?>