<?php
$divisor = 5;
$dividendo = 14;

echo $resultado = $dividendo/$divisor;

if(gettype($resultado) != "integer")
{
    echo "<br> El resultado no es entero";
}else{
    echo "<br> El resultado es entero";
}
echo "el residuo es = ", $dividendo%$divisor;