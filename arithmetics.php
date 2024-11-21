<?php
  // Arithmetic operators
  // + - * / ** %
  $x = 20;
  $y = 3;
  $z = null;

  // $z = $x + $y;
  // $z = $x - $y;
  // $z = $x * $y;
  // $z = $x / $y;
  // $z = $x ** $y;
  $z = $x % $y;

  // echo "{$z}";


  // Increment/Decrement operators
  $counter = 0;

  // $counter ++; // Increment by 1
  // $counter += 2; //Increment by 2
  // $counter --; // decrement by 1
  $counter -= 4; //decrement by 4
  // echo "{$counter}";


  // Operator precedences
  // ()
  // **
  // * / %
  // + -

  $cost = 1 + 2 - 3 * 4 / 5 ** 6;
  echo "{$cost}";

?>