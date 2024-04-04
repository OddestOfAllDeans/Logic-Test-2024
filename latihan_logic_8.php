<?php 

function volumebola( $r) {
    $nilaiphi = 3.14159;
    $volume = (4 / 3) * $nilaiphi * $r * $r * $r;

    return $volume;
}

function surface( $r) {
    $nilaiphi = 3.14159;
    $surfacenya = 4 * $nilaiphi * $r * $r;

    return $surfacenya;
}

$radius = 12;
$vol; $surfacenya;

$vol = volumebola($radius);
$surfacenya = surface($radius);

echo "Radius bola: " . $radius;
echo "<br>";
echo ("Volume bolanya yaitu: " );
echo ($vol);


?>