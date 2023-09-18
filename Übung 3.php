<?php

echo "Wie heisst du?";
$name = readline();

echo "Wo wohnst du?";
$Wohnort = readline();

echo "In welchem Jahr wurdest du geboren?";
$Jahrang = readline();

printf ("Hallo %s, du lebst in %s und wurdest im Jahre %s geboren.", $name, $Wohnort, $Jahrang);
?>