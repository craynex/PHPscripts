<?php

/**
 * Programm is a working calculator
 * Author: Cristian Martin
 * Date: 19.09.2023
 */

// Array
$arrayoptions = array('Klicke 1 für Addition', 'Klicke 2 für Subtraktion', 'Klicke 3 für Multiplikation', 'Klicke 4 für Division', 'Klicke 5 für das EinmalEins');

// Question for name
echo "Hallo! Wie ist heisst du?  ";
$name = (string)readline();

// Menu Output
a:
echo " " . chr(10);
echo "Hallo $name! Bitte wähle was du berechnen willst." . chr(10);
echo "***********************************************" . chr(10);
printf("%s", $arrayoptions[0]);
      echo " " . chr(10);
printf("%s", $arrayoptions[1]);
      echo " " . chr(10);
printf("%s", $arrayoptions[2]);
      echo " " . chr(10);
printf("%s", $arrayoptions[3]);
      echo " " . chr(10);
printf("%s", $arrayoptions[4]);
      echo " " . chr(10);
print("Klicke 0 um zu beenden");
      echo " " . chr(10);
echo "Deine Wahl:  ";
$input = (int)readline(); // Input

// Calculator
switch ($input) {
      case '0':
            echo "Auf Wiedersehen!" . chr(10);
            exit;
      case '1': // Input Addition
            echo "Du hast Addition Gewählt!" . chr(10); // Output
            $Addition1 = (float)readline("Gib die erste nummer ein:  "); // Output and input
            $Addition2 = (float)readline("Gib die zweite nummer ein:  "); // Output and input
            $Additionresult = $Addition1 + $Addition2; // Calculation
            printf("Das ergebnis ist $Additionresult!"); // Output result
            echo " " . chr(10);
            ad:
            echo "Willst du beenden? Y für Ja, N für Nein   ";
            $inputend = readline();
            switch ($inputend) {
                  case 'Y':
                        echo "Auf Wiedersehen!" . chr(10);
                        exit;
                  case 'N':
                        break;
                  default:
                        goto ad;
            }
            goto a;
            break;
      case '2': // Input Subtraction
            echo "Du hast Subtraktion Gewählt!" . chr(10);
            $Subtraktion1 = (float)readline("Gib die erste nummer ein:  ");
            $Subtraktion2 = (float)readline("Gib die zweite nummer ein:  ");
            $Subtraktionresult = $Subtraktion1 - $Subtraktion2;
            printf("Das ergebnis ist $Subtraktionresult!");
            echo " " . chr(10);
            s:
            echo "Willst du beenden? Y für Ja, N für Nein   ";
            $inputend = readline();
            switch ($inputend) {
                  case 'Y':
                        echo "Auf Wiedersehen!" . chr(10);
                        exit;
                  case 'N':
                        break;
                  default:
                        goto s;
            }
            goto a;
            break;
      case '3': // Input Multipiplication
            echo "Du hast Multiplikation Gewählt!" . chr(10);
            $multiplikation1 = (float)readline("Gib die erste nummer ein:  ");
            $multiplikation2 = (float)readline("Gib die zweite nummer ein:  ");
            $multiplikationresult = $multiplikation1 * $multiplikation2;
            printf("Das ergebnis ist $multiplikationresult!");
            echo " " . chr(10);
            m:
            echo "Willst du beenden? Y für Ja, N für Nein   ";
            $inputend = readline();
            switch ($inputend) {
                  case 'Y':
                        echo "Auf Wiedersehen!" . chr(10);
                        exit;
                  case 'N':
                        break;
                  default:
                        goto m;
            }
            goto a;
            break;
      case '4': // Input Division
            echo "Du hast Division Gewählt!" . chr(10);
            di:
            $division1 = (float)readline("Gib die erste nummer ein:  ");
            $division2 = (float)readline("Gib die zweite nummer ein:  ");
            if ($division2 == '0') {
                  echo "Man kann keine Zahl durch null dividieren!" . chr(10);
                  goto di;
            }
            if ($division1 == '0') {
                  echo "Man kann keine Zahl durch null dividieren!" . chr(10);
                  goto di;
            }
            $divisionresult = $division1 / $division2;
            printf("Das ergebnis ist $divisionresult!");
            echo " " . chr(10);
            d:
            echo "Willst du beenden? Y für Ja, N für Nein   ";
            $inputend = readline();
            switch ($inputend) {
                  case 'Y':
                        echo "Auf Wiedersehen!" . chr(10);
                        exit;
                  case 'N':
                        break;
                  default:
                        goto d;
            }
            goto a;
            break;
      case '5': // Input Einmaleins
            print ("Einmaleins") . chr(10);
            print ("**********") . chr(10);

            // Repetition and calculation of the multiplications.
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) { // Output
                  $summe = $Zahl * 1; // Calculation
                  echo $Zahl . ' * 1 = ' . $summe . chr(10); // Output
            }
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) {
                  $summe = $Zahl * 2;
                  echo $Zahl . ' * 2 = ' . $summe . chr(10);
            }
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) {
                  $summe = $Zahl * 3;
                  echo $Zahl . ' * 3 = ' . $summe . chr(10);
            }
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) {
                  $summe = $Zahl * 4;
                  echo $Zahl . ' * 4 = ' . $summe . chr(10);
            }
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) {
                  $summe = $Zahl * 5;
                  echo $Zahl . ' * 5 = ' . $summe . chr(10);
            }
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) {
                  $summe = $Zahl * 6;
                  echo $Zahl . ' * 6 = ' . $summe . chr(10);
            }
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) {
                  $summe = $Zahl * 7;
                  echo $Zahl . ' * 7 = ' . $summe . chr(10);
            }
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) {
                  $summe = $Zahl * 8;
                  echo $Zahl . ' * 8 = ' . $summe . chr(10);
            }
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) {
                  $summe = $Zahl * 9;
                  echo $Zahl . ' * 9 = ' . $summe . chr(10);
            }
            for ($Zahl = 1; $Zahl <= 10 . chr(10); $Zahl++) {
                  $summe = $Zahl * 10;
                  echo $Zahl . ' * 10 = ' . $summe . chr(10);
            }
            f:
            echo "Verlassen? Y für Ja und N für Nein  ";
            $leave = (string)readline();
            switch ($leave) {
                  case 'Y':
                        echo "Auf Wiedersehen!" . chr(10);
                        exit;
                  case 'N':
                        goto a;
                        break;
                  default:
                        echo "Diese Auswahl gibt es nicht!" . chr(10);
                        goto f;
            }
            break;
      default:
            echo "Diese auswahl gibt es nicht!" . chr(10);
            goto a;
}
