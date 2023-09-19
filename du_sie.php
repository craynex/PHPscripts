<?php

// Frage des Namen und Alter
echo ("Wie ist dein Name?");
$Name = readline();

echo "Wie alt bist du?";
$Alter = readline();

// Bestimmung ob Du oder Sie
if ($Alter > 18) {
  printf("Sie heissen $Name und Sie sind $Alter Jahre alt!");
} else {

  printf("Du heisst $Name und du bist $Alter alt!");
}
