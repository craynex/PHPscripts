<?php

echo "Wie alt bist du?";
$Alter = readline();

$Unterjährig = $Alter < 18;

$Volljährig = $Alter > 18;

if ($Alter = $Volljährig)
      print("Du bist Volljährig :) ");

if ($Alter = $Unterjährig)
      print("Du bist Minderjährig :( ");
