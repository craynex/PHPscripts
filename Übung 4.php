<?php

echo "In welchem Jahr wurdest du geboren?";
$Jahrgang = readline();

$Aktuellesjahr = 2023;

$Alter = $Aktuellesjahr - $Jahrgang;

printf("Du wirst dieses Jahr %s Jahre alt!", $Alter);