<?php
// Starte die Sitzung
session_start();

// Überprüfe, ob der Benutzer bereits angemeldet ist
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: willkommensseite.php");
    exit;
}

// Überprüfe, ob das Login-Formular gesendet wurde
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Überprüfe die Benutzername- und Passwort-Eingabe
    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];

    // Führe hier deine Logik zur Überprüfung der Zugangsdaten durch
    // Zum Beispiel, überprüfe sie mit Daten aus einer Datenbank

    if($benutzername == "admin" && $passwort == "pass123"){
        // Authentifizierung erfolgreich
        session_start();

        // Setze Sitzungsvariablen
        $_SESSION["loggedin"] = true;
        $_SESSION["benutzername"] = $benutzername;

        // Weiterleitung zur Willkommensseite
        header("location: willkommensseite.php");
    }else{
        // Authentifizierung fehlgeschlagen
        $fehlermeldung = "Ungültiger Benutzername oder Passwort.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <div>
            <label for="benutzername">Benutzername:</label>
            <input type="text" id="benutzername" name="benutzername" required>
        </div>
        <div>
            <label for="passwort">Passwort:</label>
            <input type="password" id="passwort" name="passwort" required>
        </div>
        <div>
            <input type="submit" value="Anmelden">
        </div>
    </form>
    
    <?php
    if(isset($fehlermeldung)){
        echo "<p>" . $fehlermeldung . "</p>";
    }
    ?>
</body>
</html>