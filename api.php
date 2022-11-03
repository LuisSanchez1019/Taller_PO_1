<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    if($i==1)
        $pago=10;
    else
        $pago=$pago*2;
    $total=$total+$pago;
    echo 'Valor de pago: ' . $pago . "<br/>\n";
}

?>