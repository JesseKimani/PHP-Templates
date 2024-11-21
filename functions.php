<?php
  function hipotenuse($a, $b) {
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
  }

  echo round(hipotenuse(5, 9), 2) . "<br><br>";

  /*
  function is_even ($number) {
    if ($number % 2 == 0) {
      echo "Even";
    }
    else {
      echo "Odd";
    }
  }

  is_even(7);
  */


  // string functions
  $username = "Kimani Jay";
  $phone = "07-22-444-999";

  $user_names = array("Jesse", "Kimani", "Irungu");

  // $username = strtolower($username); // switch to lowercase
  // $username = strtoupper($username); // switch to uppercase
  // $username = str_pad($username, 20, "|"); //adds / at the end of the string unit it is 20 characters
  // $username = trim($username); // remove white spaces at the beginning and the end
  // $username = strrev($username); // reverse
  // $username = str_shuffle($username); // shuffle
  // $equals = strcmp($username, "Sam"); comparison - true/false
  // $count = strlen($phone); // length
  $index = strpos($username, "J"); // find the position of the first occurence
  // $username = substr($username, 0, 5); // get a part of a string
  $username = substr($username, 7);

  $phone = str_replace("-", "", $phone); // replace a character

  // $fullname = explode(" ", $username); // remove a character from a string array
  $fullname = implode("-", $user_names); // join array values with a string
  echo $fullname . "<br>";

  // echo $username . "<br>";
  echo $phone . "<br>";
?>