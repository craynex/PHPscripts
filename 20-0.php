<?php

/**
 * Programm will list the numbers 20 - 0 and add them together
 * Author: Cristian Martin
 * Date: 19.09.2023
 */

// List 20 - 0 and the addition.
$summe = 0;

for($Zahl = 20; $Zahl >= 0; $Zahl--) {
      echo $Zahl . ' '; // Output list
      $summe += $Zahl; // Calculation
}

// Output what the addition of all the numbers is.
echo "\nSumme: " . $summe . chr(10);
