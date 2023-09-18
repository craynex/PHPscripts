<?php

print("Themenauswahl\n");
print("*************\n");
print("1. Modul 101\n");
print("2. modul 102\n");
print("3. Modul 103\n");
print("4. Modul 104\n");
print("5. modul 105\n");
print("6. Modul 106\n");
print("7. Modul 107\n");
print(" \n");
print("Wähle nummer:\n");
$number = readline();

switch($number) {
      case '1':
            print("Du hast Modul 101 gewählt!\n");
            break;
      case '2':
            print("Du hast Modul 102 gewählt!\n");
            break;
      case '3':
             print("Du hast Modul 103 gewählt!\n");
             break;
      case '4':
            print("Du hast Modul 104 gewählt!\n");
            break;
       case '5':
            print("Du hast Modul 105 gewählt!\n");
            break;
      case '6':
            print("Du hast Modul 106 gewählt!\n");
            break;
      case '7':
            print("Du hast Modul 107 gewählt!\n");
            break;
      default:
            print("Dieses Thema gibt es nicht!\n");
            break;
}