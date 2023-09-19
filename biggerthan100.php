<?php

/**
 * Programm can define if a number is bigger than 100 and repeat itself if the input number is smaller than 100.
 * Author: Cristian Martin
 * Date: 19.08.2023
 */

// Input number.
echo ("Gib eine Zahl ein die grösser als 100 ist!");
$input = readline();

// Repetition if input is smaller than 100.
while ($input <= 100) :
      echo ("Gib eine Zahl ein die grösser als 100 ist!");
      $input = readline();
endwhile;

// Output if input is bigger than 100.
if ($input > 100) {
      printf("$input ist grösser als 100!");
}
