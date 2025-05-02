<?php
session_start();

// Überprüfe, ob der Benutzer angemeldet ist
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Begrüßungsnachricht
$benutzername = $_SESSION["benutzername"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Willkommen</title>
</head>
<body>
    <h2>Willkommen, <?php echo $benutzername; ?>!</h2>
    <p>Dies ist die geschützte Willkommensseite.</p>
    <p>Hier kannst du weitere Inhalte oder Funktionen für angemeldete Benutzer anzeigen.</p>
    <a href="logout.php">Abmelden</a>
</body>
</html>
