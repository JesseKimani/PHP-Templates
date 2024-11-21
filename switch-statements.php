<?php
  $grade = "Boy";

  switch($grade) {
    case "A":
      echo "Excelent";
      break;
    case "B":
      echo "Good";
      break;
    case "C":
      echo "Satisfactory";
      break;
    case "D":
      echo "Pass";
      break;
    case "F":
      echo "Fail";
      break;
    
    default:
      echo "{$grade} is not a valid grade";
  }

?>