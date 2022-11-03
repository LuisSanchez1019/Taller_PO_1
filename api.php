<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $venta = floatval ($_POST['venta']);
    $categoria = intval ($_POST['categoria']);
    if($venta>1000)
        $ventas_mayores_a_1000=$ventas_mayores_a_1000+1;
    if($venta>500&&<=1000)
        $ventas_entre_500_y_1000=$ventas_entre_500_y_1000+1;
    if($venta<=500)
        $ventas_menores_a_500=$ventas_menores_a_500+1;
    $monto_global=$monto_global+$venta;
    if($categoria==1)
        $monto_de_abarrotes=$monto_de_abarrotes+$venta;
    if($categoria==2)
        $monto_de_blancos=$monto_de_blancos+$venta;
    if($categoria==3)
        $monto_de_caballeros=$monto_de_caballeros+$venta;
    if($categoria==4)
        $monto_de_damas=$monto_de_damas+$venta;
    if($categoria==5)
        $monto_de_electronicos=$monto_de_electronicos+$venta;
    if($categoria==6)
        $monto_de_carnes=$monto_de_carnes+$venta;
    if($categoria==7)
        $monto_de_panaderia=$monto_de_panaderia+$venta;
}
 
?>