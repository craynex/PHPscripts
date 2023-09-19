<?php

echo ("Wie lautet die erste Note?");
$Note1 = readline();

echo ("Wie lautet die zweite Note?");
$Note2 = readline();

echo ("Wie lautet die dritte Note?");
$Note3 = readline();

$Summe = $Note1 + $Note2 + $Note3;

$Durchschnitt = $Summe / 3;

Printf("Dein Notendurchschnitt ist %s", $Durchschnitt) . chr(10);
