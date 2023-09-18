<?php

echo("Wie heisst die erste person?") . chr(10);
$name1 = readline();
echo("Wie gross ist die erste person?") . chr(10);
$size1 = readline();
echo("Wie heisst die zweite person?") . chr(10);
$name2 = readline();
echo("Wie gross ist die zweite person?") . chr(10);
$size2 = readline();

if($size1 > $size2){
      printf("$name1 ist grösser als $name2") . chr(10);
} else {
      printf("$name2 ist grösser als $name1") . chr(10);
}
