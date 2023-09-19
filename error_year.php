<?php

/**
 * Author: Cristian Martin
 * date: 18.09.2023
 */

// Question for the birthyear
echo ("Dein Jahrgang?");
$Jahrgang = readline();

// Output "OK!" or "NOK!?!"
if ($Jahrgang < date('Y')) {
      print ("OK!") . chr(10);
} else {
      print ("NOK!?!") . chr(10);
}
