<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>isset() & empty()</title>
</head>
<body>
  <form action="isset-empty.php" method="post">
    <label for="">Username:</label><br>
    <input type="text" name="username"><br><br>

    <label for="">Password:</label><br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Log In" name="login">
  </form>
</body>
</html>

<?php
  // isset() - returns true if a variable is declared and not null
  // empty() - returns true if a variable is not declared, null or ""

  if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
      echo "Username is missing" . "<br>";
    }
    elseif (empty($password)) {
      echo "Password is missing" . "<br>";
    }
    else {
      echo "Welcome {$username}";
    }

    // echo "Login button is set";
  }


  /*
  foreach ($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
  }
  */


  /*
  $myName = null;

  if (isset($myName)) {
    echo "This variable is set";
  }
  else {
    echo "This variable is not set" . "<br>";
  }

  // empty() - returns true if a variable is not declared, null or ""
  $city = "";

  if (empty($city)) {
    echo "Variable is empty";
  }
  else {
    echo "Variable is not empty";
  }
  */
?>
