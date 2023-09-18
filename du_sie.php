<?php

echo ("Wie ist dein Name?");
$Name = readline();

echo "Wie alt bist du?";
$Alter = readline();

if ($Alter > 18) {
  printf("Sie heissen $Name und Sie sind $Alter Jahre alt!");
} else {

  printf("Du heisst $Name und du bist $Alter alt!");
}
