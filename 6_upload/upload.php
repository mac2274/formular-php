<?php

$targetDirectory = __DIR__ ."/uploads/"; // Der Ordner, in dem die Datei gespeichert werden soll
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]); // Der Pfad zur hochgeladenen Datei
// Überprüfen, ob die Datei tatsächlich hochgeladen wurde
if(isset($_POST["submit"]) && isset($_POST["fileToUpload"])) {
    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
        echo "Es sind nur JPG, JPEG, PNG & GIF Dateien erlaubt.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Die Datei ". basename( $_FILES["fileToUpload"]["name"]). " wurde erfolgreich hochgeladen.";
        } else {
            echo "Es gab einen Fehler beim Hochladen Ihrer Datei.";
        }
    }
} elseif (!isset($_POST["fileToUpload"])) {
    echo "Es wurde keine Datei mitgegeben.";
} elseif (!isset($_POST["submit"])) {
    echo "Es wurde nicht über das Formular abgesendet";
}

?>

