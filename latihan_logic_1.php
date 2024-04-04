<?php 

for ($i = 1 ; $i <= 5; $i++) {
    for ($j=5; $j>$i; $j--) {
        echo "&nbsp";
        echo "\n";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "&nbsp";
        echo "+ ";
    } 
    echo "<br>";
}


for ($i = 4 ; $i >= 1; $i--) {
    for ($j=4; $j>$i; $j--) {
        echo "&nbsp";
        echo "&nbsp";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "&nbsp";
        echo "&nbsp";
        echo "+ ";

    } 
    echo "<br>";
}

?>