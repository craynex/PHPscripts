<?php

/**
 * Programm to list your favorite food
 * Author: Cristian Martin
 * Date: 19.09.2023
 */

$favoriteFoods = []; // Initialize an empty array to store favorite foods

// Loop to collect favorite foods
while (true) {
      echo "Lieblingsessen? ";
      $input = readline();

      if ($input === '') {
            break; // Exit the loop if the input is empty
      }

      $favoriteFoods[] = $input; // Add the input to the array
}

// Display the list of favorite foods
echo implode(PHP_EOL, $favoriteFoods) . chr(10);
