<?php
if (!file_exists('pristupy.txt')) {
    echo 'Vítejte, na této stránce jste prvně!';
} else {
    $handle = fopen('pristupy.txt', 'r');
    if ($handle === false) {
        echo 'Chyba při otevírání souboru!';
        exit;
    }
    echo 'Historie přístupů:<br>';
    $text = fread($handle, 1000);
    echo $text;
    fclose($handle);
    
}

$pristup = date('Y-m-d H:i:s');
//kontrola ulozeni času
//var_dump ($pristup);
$handle = fopen('pristupy.txt', 'a');
if ($handle === false) {
        echo 'Chyba při otevírání souboru!';
        exit;
    }
fwrite ($handle, $pristup . '<br>');
fclose($handle);
?>