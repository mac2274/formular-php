<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datei und Ordner auflisten</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="data" id="dataInput">
        <input type="submit" value="Datei hochladen" name="submit">
    </form>

    <?php
    $ordnerVerzeichnis = "8_Ordnerlisten/"; //Zielordner
    
    //prüfen ob Datei hochgeladen ist
    if (isset($_POST["submit"])) {
        $dateiname = basename($_FILES["data"]["name"]);
        $zielpfad = $ordnerVerzeichnis . $dateiname;

        $erlaubteDateien = ['jpg', 'jpeg', 'png', 'gif'];
        $dateityp = strtolower(pathinfo($dateiname, PATHINFO_EXTENSION));

        if (in_array($dateityp, $erlaubteDateien)) {
            if (move_uploaded_file($_FILES["data"]["tmp_name"], $zielpfad)) {
                echo "Bild hochgeladen";
            } else {
                echo "Hochladen fehlgeschlagen...";
            }
        } else {
            echo "Nur entsprechende Datentypen erlaubt!";
        }
    }

    $verzeichnisInhalt = scandir($ordnerVerzeichnis);
    foreach ($verzeichnisInhalt as $datei){
        if ($datei != "." && $datei != "..") {
            if (is_dir($ordnerVerzeichnis ."/". $datei)){
                echo "Das ist ein Verzeichnis: " . htmlspecialchars(($datei)) . "<br>";     
            } else {
                echo "Datei: " . htmlspecialchars($datei) . "<br>";
            }
        }   
    }
    ?>
</body>

</html>