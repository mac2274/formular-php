<?php
// ------------ Daten auslesen

require __DIR__ . "/config/config.php";

$show_form = true;

//prüfen ob ein Formular rausgesendet wurde
if (isset($_POST["frm_submit"])){
    
    if(empty($_POST['name'])){
        echo 'Der Name ist nicht ausgefüllt.';
    } else{
        echo "Hallo " .$_POST['name'];
        $show_form = false;

        $savesize = file_put_contents($cnf_kontakt_path,$_POST['name'].": ".$_POST['alter'] ."\n", FILE_APPEND);
        #var_dump($savesize); //vielleicht klappt das erstellen der kontakt.txt nicht, weil die Schreibrechte nicht existieren?
    }

} 

if ($show_form) {
    require "templates2/kontakt2.php";
}
?>