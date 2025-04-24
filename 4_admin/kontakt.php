<?php

require '/../config/config.php';

$ary_kontakte = file($cnf_kontakt_path);
print_r($ary_kontakte);

echo '<ul>';
foreach($ary_kontakte as $kontakt => $kontakt_v){
    echo '<li>#' .$kontakt. ': ' .$kontakt_v;
}

$content = file_get_contents($cnf_kontakt_path);
 echo str_replace('\n','<br>', $content);

 $ary_kontakte = explode('\n', $content);
 print_r($ary_kontakte);

?>