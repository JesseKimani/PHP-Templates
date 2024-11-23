<?php
  include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    username: <br>
    <input type="text" name="username"> <br><br>

    password: <br>
    <input type="password" name="password"> <br><br>

    <input type="submit" name="login" value="Login">
  </form> <br>
</body>
</html>

<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)) {
      echo "Please enter a username <br>";
    }

    elseif (empty($password)) {
      echo "Please enter a password <br>";
    }

    else {
      // Registration logic
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $sql_query = "INSERT INTO users (username, password) VALUES ('{$username}', '{$hashed_password}')";

      try {
        mysqli_query( $conn, $sql_query );
        echo "You have registered successfully";

      } catch (mysqli_sql_exception) {
        echo "Could not register";
      }
    }

  }
  

  mysqli_close($conn);
?>
