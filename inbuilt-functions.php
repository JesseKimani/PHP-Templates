<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inbuilt Functions</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">X: </label><br>
    <input type="text" name="x"><br> <br>

    <label for="">Y: </label><br>
    <input type="text" name="y"><br> <br>

    <label for="">Z: </label><br>
    <input type="text" name="z"><br> <br>

    <input type="submit" value="Total"><br>
  </form>
</body>
</html>

<?php
  $x = $_POST['x'];
  $y = $_POST['y'];
  $z = $_POST['z'];

  $total = null;

  // $total = abs($x); // absolute value returns the positive of the number

  // $total = round($x); // round function
  // $total = floor($x); // rounds down
  // $total = ceil($x); // rounds up

  // $total = sqrt($x); // square root
  // $total = pow($x, $y); // x to power y

  // $total = min($x, $y, $z); // minimum number
  // $total = max($x, $y, $z); // maximum number

  // $total = pi(); gets pi
  
  // $total = rand(50, 70); // random number in the range


  echo $total;

?>
