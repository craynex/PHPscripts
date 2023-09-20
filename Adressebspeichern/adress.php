<?php

/**
 * Programm can save adresses and list them using arrays
 * Author: Cristian Martin
 * Date: 20.09.2023
 */

// Array
$addressBook = [];

// Loads old adresses from the JSON file
$fileName = 'address_book.json';
if (file_exists($fileName)) {
      $json = file_get_contents($fileName);
      $addressBook = json_decode($json, true);
}

// Mainmenu
echo "Hauptmenü:\n";
echo "1. Liste aller Adressen anzeigen\n";
echo "2. Eine einzelne Adresse anzeigen\n";
echo "3. Neue Adresse erfassen\n";
echo "4. Bestehende Adresse löschen\n";
echo "5. Beenden\n";

while (true) {
      $choice = readline("Bitte wählen Sie eine Option (1-5): ");

      switch ($choice) {
            case 1:
                  // List of all adresses
                  echo "Liste aller Adressen:\n";
                  foreach ($addressBook as $index => $address) {
                        echo "$index. " . $address['name'] . ", " . $address['street'] . ", " . $address['city'] . "\n";
                  }
                  break;

            case 2:
                  // Show single adresses
                  $index = readline("Geben Sie den Index der Adresse ein: ");
                  if (isset($addressBook[$index])) {
                        $address = $addressBook[$index];
                        echo "Adresse: " . $address['name'] . ", " . $address['street'] . ", " . $address['city'] . "\n";
                  } else {
                        echo "Ungültiger Index.\n";
                  }
                  break;

            case 3:
                  // Type in new adresses
                  $name = readline("Name: ");
                  $street = readline("Straße: ");
                  $city = readline("Stadt: ");
                  $newAddress = [
                        'name' => $name,
                        'street' => $street,
                        'city' => $city,
                  ];
                  $addressBook[] = $newAddress;
                  echo "Adresse hinzugefügt.\n";
                  break;

            case 4:
                  // Delete saved adresses
                  $index = readline("Geben Sie den Index der zu löschenden Adresse ein: ");
                  if (isset($addressBook[$index])) {
                        unset($addressBook[$index]);
                        $addressBook = array_values($addressBook); // Makes new order
                        echo "Adresse gelöscht.\n";
                  } else {
                        echo "Ungültiger Index.\n";
                  }
                  break;

            case 5:
                  // Ending programm and saving all the adresses in a JSON file
                  $json = json_encode($addressBook, JSON_PRETTY_PRINT);
                  file_put_contents($fileName, $json);
                  echo "Programm wird beendet. Adressen wurden gespeichert.\n";
                  exit;

            default:
                  echo "Ungültige Option. Bitte wählen Sie eine gültige Option (1-5).\n";
                  break;
      }
}
