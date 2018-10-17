
<?php
$handle = fopen('pristupy.txt', 'r');
if ($handle) {
    while (($line = fgets($handle, 1000)) !== false) {
        echo $line; // zde se vypíše jeden řádek souboru
        // kontrola, že se to fakt načítá po řádcích var_dump ($line);
        
    }
    fclose($handle);
}
?>


<?php
/*
$handle = fopen('pristupy.txt', 'r');
$line = fgets($handle, 50000);
echo $line; // zde se vypíše jeden řádek souboru
fclose($handle);
?>
*/