<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erstelle ein Formular und speicher den Inhalt in eine Text-Datei</title>
</head>

<body>

    <form action="read.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <label for="name">Email:</label>
        <input type="text" name="email">
        <input type="submit" value="Senden">
    </form>

</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $datei = fopen("kontakt.txt", "a");
    fwrite($datei, "Name: " . $name);
    fwrite($datei, "Email: " . $email);
    fclose($datei);

    echo "Daten wurden gespeichert.";

}
?>