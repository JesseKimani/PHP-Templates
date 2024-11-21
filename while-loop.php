<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While Loop</title>
</head>
<body>
  <form action="while-loop.php" method="post">
    <input type="submit" name="stop" value="Stop">
  </form>
</body>
</html>
<?php
  $seconds = 0;
  $running = true;

  // isset function checks whether a variable is called
  if (isset($_POST['stop'])) {
    $running = false;
  }

  while ($running) {
    $seconds ++;
    echo $seconds . "<br>";

    if ($seconds == 30) {
      $running = false;
    }
  }

  /*
  $counter = 0;

  while ($counter < 10) {
    echo $counter . "<br>";
    $counter ++;
  }
  */
?>