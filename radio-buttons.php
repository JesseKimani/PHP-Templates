<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radio buttons</title>
  <style>
    .credit_card_btn {
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form action="radio-buttons.php" method="post">
    <input type="radio" name="credit_card" value="Visa" class="credit_card_btn">Visa<br>
    <input type="radio" name="credit_card" value="Mastercard" class="credit_card_btn">Mastercard<br>
    <input type="radio" name="credit_card" value="American Express" class="credit_card_btn">American Express<br><br>

    <input type="submit" value="confirm" name="confirm">

  </form><br><br>
</body>
</html>

<?php
  $credit_card = null;
  
  if (isset($_POST["credit_card"])) {
    $credit_card = $_POST["credit_card"];
  }

  switch ($credit_card) {
    case "Visa":
      echo "You selected Visa";
      break;
    
    case "Mastercard":
      echo "You selected Mastercard";
      break;

    case "American Express":
      echo "You selected American Express";
      break;
    
    default:
      echo "Please select a credit card option";
  }

  /*
  // using isset() and empty()
  $credit_card = $_POST["credit_card"];

  if (isset($_POST["confirm"])) {
    if (empty($credit_card)) {
      echo "Credit card not selected";
    }
    else {
      echo "{$credit_card} selected";
    }
  }
  */
?>
