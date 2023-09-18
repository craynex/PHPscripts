<?php

echo("Gebe die erste Zahl ein") . chr(10);
$firstnumber = readline();
echo("Geben sie die zweite Nummer ein.") . chr(10);
$secondnumber = readline();

$number = $firstnumber / $secondnumber;

if($firstnumber % $secondnumber) {
      print("$firstnumber ist nicht durch $secondnumber teilbar!") . chr(10);
} else {
      printf("$firstnumber ist durch $secondnumber teilbar!") . chr(10);
}