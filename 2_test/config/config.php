<?php
$cnf_kontakt_path = __DIR__.'/../fileDB2/kontakt.txt';

if (!is_writable($cnf_kontakt_path)){
   die("Fehler kann nicht in die Datei reinspeichern.");
}
 
echo "Hey "
?>