<?php
// Formular: Hochladen von Dokumenten 
$targetDirectory = __DIR__ ."/uploads/"; // Der Ordner, in dem die Datei gespeichert werden soll
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]); // Der Pfad zur hochgeladenen Datei
// Überprüfen, ob die Datei tatsächlich hochgeladen wurde
if(isset($_POST["submit"]) ) { //mit && isset($_POST["fileToUpload"]) hat das senden nichtgeklappt!

    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
        echo "Es sind nur JPG, JPEG, PNG & GIF Dateien erlaubt.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Die Datei <strong>" . basename( $_FILES["fileToUpload"]["name"]). "</strong> wurde erfolgreich hochgeladen.";
        } else {
            echo "Es gab einen Fehler beim Hochladen Ihrer Datei.";
        }
    }

    //eindeutige Prüfung und Aussage bei keinem Upload
} elseif (!isset($_POST["fileToUpload"])) {
    echo "Es wurde keine Datei mitgegeben.";
        //eindeutige Prüfung und Aussage bei nicht Nutzung des Formulars
} elseif (!isset($_POST["submit"])) {
    echo "Es wurde nicht über das Formular abgesendet";
}
 
echo $_POST["fileToUpload"];
?>

