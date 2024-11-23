<?php
  // Hashing - A mathematical process to encrypt sensitive data, eg. passwords
  $password = "Toti567";

  $hash = password_hash($password, PASSWORD_DEFAULT);

  if (password_verify("Toti567", $hash)) {
    echo "Login successful";
  }

  else {
    echo "Incorrect password";
  }
?>