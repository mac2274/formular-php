<?php
$show_form = true;

if(isset($_POST["frm_submit"])){
    if(empty($_POST["name"])){
        echo "Der Name ist nicht ausgefüllt.";
    } else {
        echo "Hallo " . $_POST["name"]."!";
        $show_form = false;
    }
}


if($show_form) {
    require 'templates/kontakt.php';
}
?>