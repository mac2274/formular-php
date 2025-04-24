<?php 
session_start();

if (isset($_SESSION['li_username']) && isset(($_SESSION['li_password']))){
    echo 'Du bist eingeloggt, '. $_SESSION['li_username'].'!';
    $SESSION['eingeloggt'] = true;
}
?>

<form action="" method="POST">
    Username: <input type="text" name="li_username">
    Passwort: <input type="password" name="li_password">
    <input type="submit" value="Login">
</form>