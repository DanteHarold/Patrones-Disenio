<?php
    require_once("Interfaces/IConexion.php");
    class ConexionVacia implements IConexion{
        public function Conectar(){
            echo "No se Especific√≥ Proveedor";
        }
        public function Desconectar(){
            echo "No se Especific√≥ Proveedor";
        }
    }
?>