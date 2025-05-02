<?php
// Formular: Hochladen von Dokumenten 
$targetDirectory = __DIR__ ."/uploads/"; // Der Ordner, in dem die Datei gespeichert werden soll
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]); // Der Pfad zur hochgeladenen Datei
// Überprüfen, ob die Datei tatsächlich hochgeladen wurde
if(isset($_POST["submit"]) && isset($_FILES["fileToUpload"])) { //mit  hat das senden nichtgeklappt!

    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
        echo "Es sind nur JPG, JPEG, PNG & GIF Dateien erlaubt.";
        echo "Fehler 1";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Die Datei <strong>" . basename( $_FILES["fileToUpload"]["name"]). "</strong> wurde erfolgreich hochgeladen.";
        } else {
            echo "Es gab einen Fehler beim Hochladen Ihrer Datei.";
            echo "Fehler 2";
        }
    }

    //eindeutige Prüfung und Aussage bei keinem Upload
} elseif (!isset($_FILES["fileToUpload"])) {
    echo "Es wurde keine Datei mitgegeben.";
    echo "Fehler 3";
    echo $_POST["fileToUpload"];
        //eindeutige Prüfung und Aussage bei nicht Nutzung des Formulars
} elseif (!isset($_POST["submit"])) {
    echo "Es wurde nicht über das Formular abgesendet";
    echo "Fehler 4";
}

?>

