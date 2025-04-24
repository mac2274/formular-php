<?php
//Erstelle eine PHP-Datei und lese die Text-Datei aus und zeige sie in einer Tabelle an.

$datei = "kontakt.txt"; // Datei wird als String  gespeicherzt

if (file_exists("kontakt.txt")) {
    $inhalt = file($datei); // liest die Datei zeilenweise ein (es werden Elememte eines Arrays)

    if (!empty($inhalt)){

        echo "<table>";
        foreach ($inhalt as $zeile){
            echo "<tr>";
            $daten = explode(":", $zeile);
            foreach ($daten as $wert){
                echo "<td>" . trim($wert) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table";
    } else {
        echo "Datei ist leer.";
    } 
} else {
    echo "Datei existiert nicht.";
} 

?>