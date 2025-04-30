<?php
require __DIR__ . "/../config/config.php";

$ary_kontakte = file($cnf_kontakt_path); 
print_r($ary_kontakte);
//1. Array und in Liste iterieren lassen
echo "<ul>";
foreach ($ary_kontakte as $key => $value){
    echo "<li>#$key: $value";
}

//2. mit file_get_contents() wird ein String zurückgegeben 
$content = file_get_contents($cnf_kontakt_path);
echo str_replace("\n","<br>", $content);

//3. der String wird hier mit explode() in einzelteile getrennt
$ary_content = explode("\n", $content);
print_r($ary_content);
?>