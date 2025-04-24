<?php
session_start();

// benötigt damit PHP weißt, dass man sich abgemeldet hat
if (isset($_GET['logout'])){
    $_SESION['eingeloggt'] = false;
}

if (isset($_POST['frm_username']) && isset(($_POST['frm_password']))){

    if($_POST['frm_username'] == 'root' && $_POST['frm_password'] == 'root'){
        echo 'Tut!';
        $_SESSION['eingeloggt'] = true;
    }else {
        echo 'Login nicht erfolgreich.';
    }
}

if ($_session['eingeloggt'] && $_sesion['eingeloggt'] === true){
    // hier gibt es die option des Abmeldens
    echo 'Du bist bereits eingeloggt. <a href="?logout=1">Ausloggen</a>';
} else {
  
?>

<form action="" method="POST">
    <label for="username">Username: </label>
    <input type="text" name="frm_username"><br>
    <label for="username">Passwort: </label>
    <input type="password" name="frm_password"><br>
    <input type="submit" value="LOgin">
</form>

<?php } ?>