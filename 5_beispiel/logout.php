<?php
session_start();

// Sitzung beenden
session_destroy();

// Weiterleitung zur Login-Seite
header("location: index.php");
exit;
?>