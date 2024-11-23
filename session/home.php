<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  This is the home page <br>

  <form action="home.php" method="post">
    <input type="submit" name="logout" value="LogOut"> <br>

  </form> <br> <br>
</body>
</html>

<?php
  if (isset($_POST['logout'])) {
    session_destroy(); // end the session and delete any data stored
    header('Location: login.php'); // redirects to the login page
  }

  echo $_SESSION['username'] . "<br>";
  echo $_SESSION['password'] . "<br>";

?>
