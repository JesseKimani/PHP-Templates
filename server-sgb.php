<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server SGB</title>
</head>
<body>
  <!-- PHP_SELF gets the current file name -->
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    username: <br>
    <input type="text" name="username"> <br>
    <input type="submit" value="login">
  </form><br><br>
</body>
</html>

<?php
  // $_SERVER - a super global variable that contains headers, paths, and script locations

  $username = $_POST['username'];

  // REQUEST_METHOD checks whether the form has a GET or POST method
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello {$username} <br>";
  }
  /*
  foreach ($_SERVER as $key => $value) {
    echo "{$key} = {$value} <br>";
  }
    */
?>
