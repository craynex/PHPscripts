<?php

/**
 * Programm simulates a german quiz game called "Wer wird Millionär"
 * Author: Cristian Martin
 * Date 20.09.2023
 */

// Question for name and explanation of the rules
echo "Hallo! Wilkommen bei wer wird Millionär! Wie heisst du denn?   ";
$name = readline();
echo " " . chr(10);
echo "Hallo $name! Fangen wir an, du kannst zwischen naja nichts und 1 Million Euro gewinnen!" . chr(10);
echo "Es gibt 15 Fragen nichts was du nicht schaffen kannst" . chr(10);
echo "Du hast sogar Rückfall limiten bei 500 und 16'000 Euro sodass du nicht mit leeren Händen nach Hause musst." . chr(10);
echo "Sag nur wenn du bereit bist also schreibe einfach Y!   ";
startquestion:
$start = readline();

// Confirmation if your ready!
if ($start == 'Y') {
      goto start;
} else {
      echo "Grosses Y es ist nicht so schwierig!" . chr(10);
      goto startquestion;
}

// Questions
start:
echo "Perfekt! Du hast jetzt 100 Euro zuuur Frage!" . chr(10);
echo " " . chr(10);
f1:
echo "Frage eins: Wie lange braucht die Erde um 1 mal die Sonne zu umkreisen?" . chr(10); // Question
echo "(A) 365 Stunden" . chr(10); // Options
echo "(B) 12 Monate" . chr(10);
echo "(C) 1440 Minuten" . chr(10);
echo "(D) 10 Jahre" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   "); // User input
switch ($inputquestion1) {
      case 'A':
            echo "Das ist falsch :( geh nach Hause und wiederhole Schule!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Okay das ist richtig! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'C':
            echo "Das ist falsch :( geh nach Hause und wiederhole Schule!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Das ist falsch :( geh nach Hause und wiederhole Schule!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f1;
}
f2:
echo "Frage zwei: C ist richtig" . chr(10);
echo "(A)" . chr(10);
echo "(B)" . chr(10);
echo "(C)" . chr(10);
echo "(D)" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Bisch du dumm???";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Bisch du dumm???";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Okay das ist richtig! 200 Euro! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'D':
            echo "Bisch du dumm???";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f2;
}
f3:
echo "Frage drei: Life is?" . chr(10);
echo "(A) Roblox" . chr(10);
echo "(B) Good" . chr(10);
echo "(C) Boring" . chr(10);
echo "(D) Keine Ahnung" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Okay das ist richtig! 300 Euro! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'B':
            echo "Falsch!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Falsch!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Falsch!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f3;
}
f4:
echo "Frage vier: Zli ist?" . chr(10);
echo "(A) Doof" . chr(10);
echo "(B) OK" . chr(10);
echo "(C) Mit Jörg" . chr(10);
echo "(D) Meh" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Falsch!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Falsch!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Okay das ist richtig! 500 Euro, erste Rückfall limite! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'D':
            echo "Falsch!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f4;
}
f5:
echo "Frage fünf: Im welchem Jahr war Will Smith das erste mal in Fresh prince of bel air?" . chr(10);
echo "(A) 1994" . chr(10);
echo "(B) 1986" . chr(10);
echo "(C) 2002" . chr(10);
echo "(D) 1990" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Okay das ist richtig! 1000 Euro! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f5;
}
f6:
echo "Frage sechs: Wie viele filme hat die Harry Potter reihe?" . chr(10);
echo "(A) 6" . chr(10);
echo "(B) 10" . chr(10);
echo "(C) 7" . chr(10);
echo "(D) 8" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Okay das ist richtig! 2000 Euro! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f6;
}
f7:
echo "Frage sieben: Welches ist die grösste Filmindustrie?" . chr(10);
echo "(A) Nollywood" . chr(10);
echo "(B) Hollywood" . chr(10);
echo "(C) Bollywood" . chr(10);
echo "(D) Tollywood" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Okay das ist richtig! 4000 Euro";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'B':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f7;
}
f8:
echo "Frage acht: Welcher Mathematiker hat gravitation entdeckt?" . chr(10);
echo "(A) Albert Einstein" . chr(10);
echo "(B) Robert J Oppenheimer" . chr(10);
echo "(C) Diego" . chr(10);
echo "(D) Isaac Newton" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Schön wärs Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Okay das ist richtig! 8000 Euro! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f8;
}
f9:
echo "Frage neun: Wie viele Kilometer ist Mars von der Erde entfernt wenn sie am nähsten bei einander sind?" . chr(10);
echo "(A) 56 Millionen Kilometer" . chr(10);
echo "(B) 2 Lichtjahre" . chr(10);
echo "(C) 12 MIllionen Kilometer" . chr(10);
echo "(D) 90 Millionen Kilometer" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Okay das ist richtig! 16000 Euro und Rückfall Limite! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'B':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Falsch! Du gewinnst 500 Euro!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f9;
}
f10:
echo "Frage zehn: Wann endete der erste Weltkrieg?" . chr(10);
echo "(A) 1912" . chr(10);
echo "(B) 1935" . chr(10);
echo "(C) 1918" . chr(10);
echo "(D) 1920" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Okay das ist richtig! 32000 Euro! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'D':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f10;
}
f11:
echo "Frage elf: Wann wurde das Rad erfunden?" . chr(10);
echo "(A) 1764" . chr(10);
echo "(B) 3500 bc" . chr(10);
echo "(C) 4500 bc" . chr(10);
echo "(D) 2500 bc" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Okay das ist richtig! 64000 Euro! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'C':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f11;
}
f12:
echo "Frage zwölf: Wenn man zu viele fisherman's friend isst was passiert?" . chr(10);
echo "(A) Durchfall" . chr(10);
echo "(B) Kein Schlaf" . chr(10);
echo "(C) Nichts" . chr(10);
echo "(D) Fieber" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Okay das ist richtig! 125000 Euro! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'B':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f12;
}
f13:
echo "Frage dreizehn: Wann wurde das erste Youtube Video hochgeladen?" . chr(10);
echo "(A) 2008" . chr(10);
echo "(B) 2004" . chr(10);
echo "(C) 2005" . chr(10);
echo "(D) 2001" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Okay das ist richtig! 250000 Euro! Zuuur nächsten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'D':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f13;
}
f14:
echo "Frage vierzehn: Wann wurde zum ersten mal ein absraktes Bild gemalen?" . chr(10);
echo "(A) 1912" . chr(10);
echo "(B) 1906" . chr(10);
echo "(C) 1896" . chr(10);
echo "(D) 1910" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'C':
            echo "Falsch! Du gewinnst 16000 Euro!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Okay das ist richtig! 500000 Euro! Zuuur letzten Frage!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f14;
}
f15:
echo "Letzte Frage!: Am welchem Datum hat Albert Einstein die Realitivitätstheorie der Welt vorgestellt" . chr(10);
echo "(A) 12. Dezember 1906" . chr(10);
echo "(B) 30. Juni 1905" . chr(10);
echo "(C) 18. Oktober 1905" . chr(10);
echo "(D) 13. Februar 1906" . chr(10);
$inputquestion1 = (string)readline("Was ist deine Antwort?   ");
switch ($inputquestion1) {
      case 'A':
            echo "Falsch! Du gewinnst 16000 Euro! So schade du hast es fast geschafft!";
            echo " " . chr(10);
            exit;
      case 'B':
            echo "Okay das ist richtig! Du gewinnst 1000000 Euroooooo!!!!";
            echo " " . chr(10);
            echo " " . chr(10);
            break;
      case 'C':
            echo "Falsch! Du gewinnst 16000 Euro! So schade du hast es fast geschafft!";
            echo " " . chr(10);
            exit;
      case 'D':
            echo "Falsch! Du gewinnst 16000 Euro! So schade du hast es fast geschafft!";
            echo " " . chr(10);
            exit;
      default:
            echo "Was ist das für ne Auswhahl mach mal richtig! Buchstaben sind grossgeschrieben!";
            echo " " . chr(10);
            goto f15;
}