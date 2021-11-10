<?php
    require_once("Interfaces/Imple/CuentaAhorro.php");
    require_once("Interfaces/Imple/CuentaCorriente.php");
    require_once("Interfaces/ICuentaBancaria.php");
    require_once("Decorador/BlindajeDecorador.php");

    $C = new Cuenta(1,"Dante");
    echo $C->getId();
    echo $C->getCliente();
    echo '<br>';
    $cuenta = new CuentaAhorro();
   // echo $cuenta->AbrirCuenta($C);
    //echo '<br>';
   $cuentaBlindada = new BlindajeDecorador($cuenta);
   $cuentaBlindada->AbrirCuenta($C);
    
?>