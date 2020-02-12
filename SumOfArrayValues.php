<!-- Create a program that prints the sum of all the values in the array "numbers". Your "numbers" array should contain the following values: 1, 2, 5, 10, 255, 3. -->

<?php

$array = array(1, 2, 5, 10, 255, 3);
  $sum = 0;
  echo "Array Values: ";
  foreach($array as $num) {
    echo "$num ";
    $sum += $num;
  }
  echo "<br>Sum: $sum";
?>