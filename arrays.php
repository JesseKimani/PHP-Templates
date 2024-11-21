<?php
// Array - a variable that stores more than one value(related values)

  $cars = array("audi", "lexus", "volkswagen", "toyota", "bmw");

  // $cars[1] = "mercedes benz"; // changing the value of an array item
  array_push($cars, "honda", "porsche"); // add new value(s) at the end of the array
  // array_pop($cars); // remove the last array element
  // array_shift($cars); // remove the first element
  // echo count($cars); // get the number of elements in the array
  $reversed_array = array_reverse($cars); // reverse the array order

  foreach($cars as $car) {
    echo $car . "<br>";
  }
?>
