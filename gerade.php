<?php

echo("Geben Sie eine Zahl ein") . chr(10);
$Zahlinput = readline();

$Testnumber = $Zahlinput / 2;

if($Zahlinput % 2) {
      print("Zahl ist nicht gerade!") . chr(10) ;
} else {
      print("Zahl ist gerade!") . chr(10) ;
}