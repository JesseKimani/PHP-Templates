<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validation</title>
</head>
<body>
  <form action="form-validation.php" method="post">
    Username:<br>
    <input type="text" name="username"><br><br>

    age:<br>
    <input type="text" name="age"><br><br>
    
    email:<br>
    <input type="text" name="email"><br><br>

    <input type="submit" name="login" value="login">
  </form>
</body>
</html>

<?php
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    
    // validate inputs
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    echo "Your username is {$username} <br>";

    if (empty($age)) {
      echo "Invalid age entry! Please enter a valid age";
    }

    elseif (empty($email)) {
      echo "Invalid email entry! Please enter a valid email";
    }

    else {
      echo "You are {$age} <br>";
      echo "Your email address is {$email} <br>";
    }

    /*
    // Sanitize inputs - remove certain characters
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    
    echo "Your username is {$username} <br>";
    echo "You are {$age} <br>";
    echo "Your email address is {$email} <br>";
    */
  }

?>
