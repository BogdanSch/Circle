<?php
$d = rand(10, 500) * 2;

$size = $d."px";
echo "Diameter: ".$d;

echo "<div style=\"width: $size; height: $size; background: blue; border-radius: 50%;\"></div>";