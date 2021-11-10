<?php
    require_once("Interfaces/ICuentaBancaria.php");
    require_once("Modelo/cuenta.php");
    abstract class CuentaDecorador implements ICuentaBancaria{
        protected  $cuentadecorada;

        public function __construct($cuentadecorada){
            $this->cuentadecorada = $cuentadecorada;
        }

        public function AbrirCuenta($c){
            $this->cuentadecorada->AbrirCuenta($c);
        }
    }

?>