<?php
    require_once("Interfaces/IConexion.php");
    class ConexionVacia implements IConexion{
        public function Conectar(){
            echo "No se Especificó Proveedor";
        }
        public function Desconectar(){
            echo "No se Especificó Proveedor";
        }
    }
?>