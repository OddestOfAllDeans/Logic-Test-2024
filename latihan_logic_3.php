<?php 
 
$kalimat = "aaaabbaaccccddddcc";


echo $kalimat; echo "<br>";
echo "huruf a = "; echo substr_count($kalimat, 'a'); echo "<br> ";
echo "huruf b = "; echo substr_count($kalimat, 'b'); echo "<br> ";
echo "huruf c = "; echo substr_count($kalimat, 'c'); echo "<br> ";
echo "huruf d = "; echo substr_count($kalimat, 'd'); echo "<br> ";




// foreach(count_chars($kalimat, 1) as $i => $val) {
//     echo "ada $val dari huruf \"" , chr($i) , "\" di string.\n";
// }
?> 