<?php 
session_start();

if (isset($_SESSIOn["eingeloggt"]) && isset($_SESSIOn["eingeloggt"]) === true){
    echo "Du bist eingeloggt";
} else {
    echo "Bitte logge dich ein";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginformular erstellen</title>
</head>
<body>
    <h1>Logge dich bitte ein</h1>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Passwort</label>
        <input type="password" name="passwort" id="password" required>

        <input type="submit" value="Anmelden">
    </form>
</body>
</html>