<?php
  $marks = -185;

  if ($marks > 100 || $marks < 0) { // Use logical || (OR)
    echo"Invalid entry. Enter a value between 0 and 100 <br>";
  }
  elseif ($marks >= 70) {
    echo"Grade: A";
  }
  elseif ($marks >= 60) {
    echo"Grade: B";
  }
  elseif ($marks >= 50) {
    echo"Grade: C";
  }
  elseif ($marks >= 40) {
    echo"Grade: D";
  }
  else {
    echo"Grade: FAIL";
  }


  $temp = 29;
  $cloudy = true;

  // Logical && (AND)
  if ($temp >= 0 && $temp <= 35) {
    echo "The weather is good <br>";
  }
  else {
    echo"The weather is bad <br>";
  }

  // if with boolean variables
  if($cloudy) {
    echo "It's cloudy";
  }


  $child = false;
  $citizen = true;

  if ($citizen && !$child) {
    echo "You can vote";
  }
  else {
    echo "You cannot vote";
  }

?>