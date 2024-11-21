<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Loop</title>
</head>
<body>
  <form action="for-loop.php" method="post">
    <label for="">Enter a number to count to: </label><br>
    <input type="text" name="counter"><br>

    <input type="submit" value="Start">
  </form><br>

</body>
</html>

<?php
  $counter = $_POST['counter'];

  for ($i = 1; $i <= $counter; $i ++) {
    // echo "{$i} <br>";
    echo $i . "<br>"; // same as the above echo
  }
?>
