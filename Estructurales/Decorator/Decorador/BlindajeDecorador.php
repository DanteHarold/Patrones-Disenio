<?php
    require_once("CuentaDecorador.php");
    require_once("Modelo/cuenta.php");
    class BlindajeDecorador extends CuentaDecorador{
        public function __construct($cuentadecorada){
            parent::__construct($cuentadecorada);        
        }
        public function AbrirCuenta($c){
            $this->cuentadecorada->AbrirCuenta($c);
            $this->AgregarBlindaje($c);
        }
        public function AgregarBlindaje($c){
            echo "Se agregó el Blindaje";
        }
    }

?>