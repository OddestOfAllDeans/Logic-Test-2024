<?php 

$line = "HAlo sElamAt PaGi dUniA";
$newline = strtolower($line);

echo "Format Rusak: $line"; echo "<br>";
echo "Format Judul: "; echo ucwords($newline); echo "<br>";
echo "Format Biasa: "; echo strtolower($line);

?>

