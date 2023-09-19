<?php

/**
 * Programm can find out if a number can be divided by two without rest.
 * Author: Cristian Martin
 * Date: 18.09.2023
 */

// Question what number should be divided by what number.
echo ("Gebe die erste Zahl ein") . chr(10);
$firstnumber = readline();
echo ("Geben sie die zweite Nummer ein.") . chr(10);
$secondnumber = readline();

$number = $firstnumber / $secondnumber;

// Output if number can be divided by two.
if ($firstnumber % $secondnumber) {
      print ("$firstnumber ist nicht durch $secondnumber teilbar!") . chr(10);
} else {
      printf("$firstnumber ist durch $secondnumber teilbar!") . chr(10);
}
