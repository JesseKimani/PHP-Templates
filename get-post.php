<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET & POST</title>
</head>
<body>
  <form action="get-post.php" method="post">
    <label>Quantity</label><br>
    <input type="text" name="quantity"><br><br>

    <input type="submit" value="Calculate Total">
  </form>  

</body>
</html>

<?php
  $item = 'pizza';
  $price = 1000;
  $quantity = $_POST['quantity'];
  // $quantity = $_GET['quantity']; // GET is not recommended
  $total = $price * $quantity;

  echo "You have ordered {$quantity} x {$item}s <br>";
  echo "Total amount - {$total}";

?>