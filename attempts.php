<?php

/**
 * Programm can define if a number is bigger than 100 and repeat itself if the input number is smaller than 100. It will also list the amount of attempts tried at the end.
 * Author: Cristian Martin
 * Date: 19.09.2023
 */

// Functions.
$repeatinput = 0;

$loopcounter = 1;

// Input number
echo ("Gib eine Zahl ein die grösser als 100 ist!");
$input = (int)readline();

// Output if input is bigger than 100.
if ($input > 100) {
      printf("Endlich $input ist grösser als 100, du hast ein versuch gebraucht.");
}

// Repetition if number is smaller than 100.
if ($input <= 100) {
      $input = $repeatinput;
      while ($repeatinput <= 100) :
            $input = $repeatinput;
            echo ("Versuche es nochmal!"); // Output
            $repeatinput = (int)readline();
            $loopcounter++; // Counter for the attempts
      endwhile;
}

// Output with number of attempts.
if ($repeatinput > 100) {
      printf("Endlich $repeatinput ist grösser als 100, du hast $loopcounter versuche gebraucht.");
}
