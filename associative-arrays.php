<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Arrays</title>
</head>
<body>
  <form action="associative-arrays.php" method="post">
    <label for="">Enter a country</label><br>
    <input type="text" name="country"><br>

    <input type="submit" value="Send">
  </form><br>
  
</body>
</html>

<?php
  // Associative array - An array made of key=>value pairs

  $capitals = array(
    "Kenya"=> "Nairobi",
    "Uganda"=> "Kampala",
    "India"=> "New Delhi",
    "France"=> "Paris"
  );

  $country = $_POST["country"];

  foreach ($capitals as $key => $value) {
    if ($key == $country) {
      echo "Capital City = {$value}";
    }
  }


  /*
  // echo $capitals["France"];

  // $capitals["Kenya"] = "Isiolo"; // change a key value
  // $capitals["Germany"] = "Berlin"; // add a new value
  // array_pop($capitals); // remove the last element
  $countries = array_keys($capitals); // get all the keys
  $capital_cities = array_values($capitals); // get all the values
  $capitals_fliped = array_flip($capitals); // exchange all keys with their associated values


  foreach($capitals as $key => $value) {
    // echo $value . "<br>";
    echo "{$key} = {$value} <br>";
  }
  */
?>