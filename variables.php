<?php
  // Variables
  $name = "Gary";
  $item = "printer";

  $age = 25;
  $quantity = 4;

  $price = 10.56;
  $tax_rate = 0.16;

  $online_status = true;
  $total = 0;

  echo "Hello {$name}, you have ordered {$quantity} {$item}s<br>";

  $total = $price * $quantity;
  echo "Total price: \${$total}"; // Use backslash to avoid errors when using $ in a string

  

  /*
  echo "Hello {$name}<br>";
  echo "Amount - {$price}<br>";
  echo "Tax rate - {$tax_rate}";
  */
?>