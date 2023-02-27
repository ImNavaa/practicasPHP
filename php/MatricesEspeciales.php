<?php
$cuadro = array();
$cuadro[] = array(16, 3, 2, 13);
$cuadro[] = array(5, 10, 11, 8);
$cuadro[] = array(9, 6, 7, 12);
$cuadro[] = array(4, 15, 14, 1);

$cambio = rand(1,10);
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++)
        echo ($cuadro[$i][$j] + $cambio) . " ";
echo "<br>\n";
}
?>