<?php
$d = rand(10, 500) * 2;
const PI = 3.14;

$s = PI * ((d/2)*(d/2));

$size = $d."px";
echo "S = ".$d;

echo "<div style=\"width: $size; height: $size; background: blue; border-radius: 50%;\"></div>";