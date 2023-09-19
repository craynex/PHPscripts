<?php



echo ("Gib das erste Alter ein") . chr(10);
$age1 = readline();
echo ("Gib das zweite Alter ein") . chr(10);
$age2 = readline();
echo ("Gib das dritte Alter ein") . chr(10);
$age3 = readline();

$number = $age1 + $age2 + $age3;

if ($number < 100) {
      print("Die Summe ist nicht grösser als 100!");
} else {
      print("Die Summe ist grösser als 100!");
}
