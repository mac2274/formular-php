<?php
// phpinfo();
// error_reporting(E_ALL);
// ini_set("display_errors", 1); ---------- exif hat nicht geklappt, erst durch verändern der yaml.datei und einfügen einer dockerfile ist problem gelöst

$verzeichnis = __DIR__ ; //nur der Pfad zum Inhalt

$verzeichnisInhalt = scandir($verzeichnis); //lesen des Inhalts

$erlaubteDateien = ["jpg","jpeg","png","gif"];

foreach($verzeichnisInhalt as $datei){
    if($datei != "." && $datei != ".."){
        $pfad = $verzeichnis . "/" . $datei;

        if(is_file($pfad) && in_array(pathinfo($datei, PATHINFO_EXTENSION), $erlaubteDateien)){
            echo "<img style='width:500px;height:auto;' src='$datei' alt='$datei'><br>"; //hier habe ich den Pfad mit $pfad angegeben, aber hier musst $datei, also der relative Dateiname rein

            if (!function_exists('exif_read_data')) {
                die("EXIF-Erweiterung ist nicht aktiviert!");
            }
// echo $pfad; testen ob lesbar

            // EXIF einsetzen:

            // $exif = exif_read_data($pfad);
            // if(isset($exif)){
            //     echo "IST DA <br> ";
            // } else {
            //     echo "GEHT NICHT";
            // };


            // echo "Bildgröße: " . $exif['COMPUTED']['Width'] . "x" . $exif['COMPUTED']['Height'] . "<br>";
            // echo "Aufnahmedatum: " . $exif['DateTimeOriginal'] . "<br>";

            // $thumbnail = exif_thumbnail($pfad, $thumbWidth, $thumbHeight, $thumbType);
            //     if ($thumbnail !== false) {
            //         echo "<img src='data:image/jpeg;base64," . base64_encode($thumbnail) . "'alt='Thumbnail'><br>";
            //     } else {
            //         echo "Kein Thumbnail verfügbar<br>";
            //     }
        }
    }
}

?>

