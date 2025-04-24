<?php 
session_start();

if (isset($_SESSION["eingeloggt"]) && isset($_SESSION["eingeloggt"]) === true){
    echo "Du bist eingeloggt";
} else {
    echo "<h2>Bitte logge dich ein!</h2>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["usernanme"];
    $passwort = $_POST["passwort"];

    if ($username == "maggi" && $passwort = "root"){
        //dann ist login erfolgreich und es pasiert folgendes
        session_start();

        $_SESSION["eingeloggt"] = true;
        $_SESSION["username"] = $username;

        header("location: index2.php");
    } else {
        echo "Fehler eingetreten!";
    }
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