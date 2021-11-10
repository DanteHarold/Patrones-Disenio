<?php
    require_once("Interfaces/ICuentaBancaria.php");
    class CuentaCorriente implements ICuentaBancaria{
        public function AbrirCuenta($c){
            echo "Se Abrió Cuenta Corriente!";
        }
    }
?>