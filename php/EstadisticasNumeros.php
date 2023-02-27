<?php
$number_a= rand(1,7);
$number_b=rand(1,7);
$number_c=rand(1,7);
$number_d=rand(1,7);
$number_e=rand(1,7);
$number_f=rand(1,7);
$number_g=rand(1,7);
$number_h=rand(1,7);
$number_i=rand(1,7);
$number_j=rand(1,7);

$division=array("$number_a", "$number_b", "$number_c", "$number_d", "$number_e", "$number_f", "$number_g", "$number_h", "$number_i", "$number_j");

$elementnumber=count($division);

$resultado=($number_a+$number_b+$number_c+$number_d+$number_e+$number_f+$number_g+$number_h+$number_i+$number_j)/$elementnumber;

echo "La media es $resultado"
?>