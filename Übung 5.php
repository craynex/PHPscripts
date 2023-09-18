<?php

echo("In welchem Jahr wurdest du geboren?");
$Jahrgang = readline();

$Pensionsjahr = $Jahrgang + 65;

$Aktuellesjahr = 2023;

$Pensionszahl = $Pensionsjahr - $Aktuellesjahr;

Printf("Du wirst in %s Jahre Pensioniert sein", $Pensionszahl);