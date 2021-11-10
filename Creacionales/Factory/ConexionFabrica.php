<?php
    require_once("Interfaces/IConexion.php");
    require_once("Interfaces/Imple/ConexionMySql.php");
    require_once("Interfaces/Imple/ConexionOracle.php");
    require_once("Interfaces/Imple/ConexionSqlServer.php");
    require_once("Interfaces/Imple/ConexionVacia.php");
    class ConexionFabrica{
            public function getConexion($motor){
            if($motor == null){
                return new ConexionVacia();
            }
            if(strcmp($motor,"MySql") === 0){
                return new ConexionMySql();
            }
            if(strcmp($motor,"Oracle") === 0){
                return new ConexionOracle();
            }
            if(strcmp($motor,"SqlServer") === 0){
                return new ConexionSqlServer();
            }
            return new ConexionVacia();
        }
    }

?>