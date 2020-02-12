<!-- Create an array that inclusively contains all odd numbers between 0 to 20,000. Use the var_dump() function at the end to display the array values. -->

<?php
  $array_variable = [];
  for($i = 1; $i <= 20000; $i+=2) {
    $array_variable[] = $i;
  }

  var_dump($array_variable);

?>