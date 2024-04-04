<?php

$aqua = "aqua";

$array_count = array_count_values(str_split($aqua));
$res = array_keys($array_count, max($array_count));

echo $aqua; echo "<br>";
print_r($res)

?>