<?php
  include('database.php');

  /*
  // Sending data to the database
  $username = "Mayweather";
  $password = "MayPassword1";
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (username, password) VALUES ('{$username}', '{$hashedPassword}')";

  try {
    mysqli_query($conn, $sql);
    echo "Registered successfully <br>";

  } catch (mysqli_sql_exception) {
    echo "Error adding user <br>";
  }
  */

  // Fetching data from the database
  $sql = "SELECT * FROM users WHERE username = 'Lary' ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result); // this function gets each row from the result object

    echo $row['id'] . "<br>";
    echo $row['username'] . "<br>";
    echo $row['password'] . "<br>";
    echo $row['reg_date'] . "<br>";
  }


  mysqli_close($conn);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQL Test</title>
</head>
<body>
  Hello <br>
</body>
</html> -->