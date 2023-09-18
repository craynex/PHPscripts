<?php

echo ("Dein Jahrgang?");
$Jahrgang = readline();

if ($Jahrgang < date('Y')) {
      print ("OK!") . chr(10);
} else {
      print ("NOK!?!") . chr(10);
}
