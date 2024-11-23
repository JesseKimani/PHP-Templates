<?php
  // cookie - helps us store information about the user, stored in thir browser
  // used in advertisements, browsing preferences, etc.
  
  setcookie("fav_sport", "boxing", time() + (86400*2), "");
  setcookie("fav_food", "beef", time() + (86400*2), "");
  setcookie("fav_drink", "capuccino", time() - 0, ""); // delete a cookie

  // Loop through all cookies
  foreach($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
  }

  // Create an advert
  if (isset($_COOKIE['fav_food'])) {
    echo "Order some beef!";
  }
  else echo "I don't know your favourite food";
?>
