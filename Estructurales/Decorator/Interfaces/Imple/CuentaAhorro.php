<?php
    require_once("Interfaces/ICuentaBancaria.php");
    class CuentaAhorro implements ICuentaBancaria{
        public function AbrirCuenta($c){
            echo "Se Abrió Cuenta de Ahorros!";
        }
    }
?>