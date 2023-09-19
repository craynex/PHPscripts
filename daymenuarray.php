<?php

/**
 * Programm will make a menu with multiple options
 * Author: Cristian Martin
 * Date: 19.08.2023
 */

// Functions
$arrayinput = array('1 Vormittag', '2 Mittag', '3 Abend', '0 Ende', 'Ihre Wahl ');
$arrayoutput = array('Sie haben Vormittag gewählt', 'Sie haben Mittag gewählt', 'Sie haben Abend gewählt', 'Auf wiedersehen!');

// Output menu
echo "Meunü" . chr(10);
echo $arrayinput[0] . chr(10);
echo $arrayinput[1] . chr(10);
echo $arrayinput[2] . chr(10);
echo $arrayinput[3] . chr(10);
$input = readline($arrayinput[4]); // Input

// Programm ending message when input is 0.
if ($input == '0') {
      print ("Auf Wiedersehen!") . chr(10);
}

// Repetition if anything exept for 0 is clicked.
while ($input !== '0') {
      switch ($input) {
            case '1':
                  echo $arrayoutput[0] . chr(10);
                  break;
            case '2':
                  echo $arrayoutput[1] . chr(10);
                  break;
            case '3':
                  echo $arrayoutput[2] . chr(10);
                  break;
            case '0':
                  echo "Bye" . chr(10);
                  exit;
            default:
      }
      // Input repetition
      echo " " . chr(10);
      echo "Menü" . chr(10);
      echo $arrayinput[0] . chr(10);
      echo $arrayinput[1] . chr(10);
      echo $arrayinput[2] . chr(10);
      echo $arrayinput[3] . chr(10);
      $input = readline($arrayinput[4]);

      // Ending message when 0 is clicked after a repetition.
      if ($input == '0') {
            print ("Auf Wiedersehen!") . chr(10);
      }
}
