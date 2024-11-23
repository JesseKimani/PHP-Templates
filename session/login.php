<?php
  // session - stores information about the user that can be used accross multiple pages
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form action="login.php" method="post">
    username: <br>
    <input type="text" name="username"> <br>

    password: <br>
    <input type="password" name="password"> <br> <br>

    <input type="submit" name="login" value="login"> <br>
  </form>
</body>
</html>

<?php
  if (isset($_POST['login'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];

      header('Location: home.php'); // redirects to the home page
    }

    else {
      echo "Missing username or password";
    }
  }

?>