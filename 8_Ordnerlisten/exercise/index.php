<?php
$verzeichnis = __DIR__ . "/"; //nur der Pfad zum Inhalt

$verzeichnisInhalt = scandir($verzeichnis); //lesen des Inhalts

$erlaubteDateien = ["jpg","jpeg","png","gif"];

foreach($verzeichnisInhalt as $datei){
    if($datei != "." && $datei != ".."){
        $pfad = $verzeichnis . "/" . $datei;

        if(is_file($datei) && in_array(pathinfo($datei, PATHINFO_EXTENSION), $erlaubteDateien)){
            echo "<img src=".$pfad ."alt=".$datei."><br>";
        }
    }
}

echo $$pfad;
?>

