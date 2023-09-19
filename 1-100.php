<?php

/**
 * Programm will list the numbers 1 - 100 and add them together
 * Author: Cristian Martin
 * Date: 19.09.2023
 */

// List 1 - 100 and the addition.
$summe = 0;

for ($Zahl = 1; $Zahl <= 100; $Zahl++) {
    echo $Zahl . ' '; // Output list
    $summe += $Zahl; // Calculation
}

// Output what the addition of all the numbers is.
echo "\nSumme: " . $summe . chr(10);
