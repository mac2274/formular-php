<?php
require __DIR__ . "/../config/config.php";

$ary_kontakte = file($cnf_kontakt_path); 
print_r($ary_kontakte);

echo "<ul>";
foreach ($ary_kontakte as $key => $value){
    echo "<li>#$key: $value";
}
$content = file_get_contents($cnf_kontakt_path);
echo str_replace("\n","<br>", $content);

$ary_content = explode("\n", $content);
print_r($ary_content);
?>