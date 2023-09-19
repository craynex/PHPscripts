<?php

/**
 * Programm makes a menu where you can choose an option.
 * Author: Cristian Martin
 * Date: 18.09.2023
 */

// Menu and input.
print("Hauptmenü\n");
print("*************\n");
print("(A)endern\n");
print("(B)eenden\n");
print("(D)rucken\n");
print("(E)ingeben\n");
print("(L)oeschen\n");
print(" \n");
print("Wähle Buchstabe:\n");
$number = readline();

// Output of what option was choosen.
switch ($number) {
      case 'A': // Input
            print("Sie haben Ändern gewählt!\n"); // Output
            break;
      case 'B':
            print("Sie haben Beenden gewählt!\n");
            break;
      case 'D':
            print("Sie haben Drucken gewählt!\n");
            break;
      case 'E':
            print("Sie haben Eingeben gewählt!\n");
            break;
      case 'L':
            print("Sie haben Löschen gewählt!\n");
            break;
      case 'a':
            print("Sie haben Ändern gewählt!\n");
            break;
      case 'b':
            print("Sie haben Beenden gewählt!\n");
            break;
      case 'd':
            print("Sie haben Drucken gewählt!\n");
            break;
      case 'e':
            print("Sie haben Eingeben gewählt!\n");
            break;
      case 'l':
            print("Sie haben Löschen gewählt!\n");
            break;
      default:
            print("Diese Wahl gibt es nicht!\n");
            break;
}
