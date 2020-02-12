<!-- Create a program that prints all the odd numbers from 1 to 1000. Use the standard for loop for this exercise and don't create any arrays. -->

<?php

for($i = 1; $i < 1000; $i++) {
  if($i % 2 != 0) {
    echo "$i\n";
  }
}

?>