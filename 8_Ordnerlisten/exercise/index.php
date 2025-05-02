<?php
$verzeichnis = __DIR__ . "/"; 

$erlaubteDateien = ["jpg","jpeg","png","gif"];

foreach($verzeichnis as $datei){
    if($datei != "." && $datei != ".."){
        $pfad = $verzeichnis . "/" . $datei;

        if(is_file($datei) && in_array(pathinfo($datei, PATHINFO_EXTENSION), $erlaubteDateien)){
            echo "<img src=".$pfad ."alt=".$datei."><br>";
        }
    }
}

echo $verzeichnis;
echo $;
?>

