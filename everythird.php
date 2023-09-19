<?php

/**
 * Programm will list every third number until 30 and add them together
 * Author: Cristian Martin
 * Date: 19.09.2023
 */

// List of every third number until 30 and the addition.
$summe = 0;

for ($zahl = 1; $zahl <= 30; $zahl ++) {
      if ($zahl % 3 == 0) {
            echo $zahl . ' '; // Output list
            $summe += $zahl; // Calculation
      }
}

// Output what the addition of all the numbers is.
echo "\nSumme : " . $summe . chr(10);
