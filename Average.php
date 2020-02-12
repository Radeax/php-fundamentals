<!-- Create a program that prints the average of the values in the array called "numbers". Array "numbers" should have the following values: 1, 2, 5, 10, 255, 3. -->

<?php

$array = array(1, 2, 5, 10, 255, 3);
  $sum = 0;
  echo "Array Values: ";
  foreach($array as $num) {
    echo "$num ";
    $sum += $num;
  }
  $avg = $sum/count($array);
  echo "<br>Average: $avg";

?>