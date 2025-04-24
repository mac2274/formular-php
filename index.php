<?php
$show_form = true;

if(isset($_POST["frm_submit"])){
    if(empty($_POST["name"])){
        echo "Der Name ist nicht ausgefüllt.";
    } else {
        echo "Hallo " . $_POST["name"];
        $show_form = false;

        $savesize = file_put_contents('/maggiyuen/work/Weiterbildung/9_Docker/Compose/webserver/www/formular/fileDB/kontakt.txt', $_POST['name']);
        var_dump($savesize);
        if($savesize >0){
            echo 'Erfolgreich';
        }
    }
}

if($show_form) {
    require 'templates/kontakt.php';
}
?>