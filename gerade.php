<?php

/**
 * Programm can find out if a number is even or odd
 * Author: Cristian Martin
 * Date: 18.09.2023
 */

 // Question what number
echo ("Geben Sie eine Zahl ein") . chr(10);
$Zahlinput = readline();

//Math
$Testnumber = $Zahlinput / 2;

// Output if number is even or odd
if ($Zahlinput % 2) {
      print ("Zahl ist nicht gerade!") . chr(10);
} else {
      print ("Zahl ist gerade!") . chr(10);
}
