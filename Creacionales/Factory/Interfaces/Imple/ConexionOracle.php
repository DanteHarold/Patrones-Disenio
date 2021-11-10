<?php
    require_once("Interfaces/IConexion.php");
    class ConexionOracle implements IConexion{
        private string $host;
        private string $puerto;
        private string $user;
        private string $password;

        public function __construct(){
            $this->host = "localhost";
            $this->puerto = "3306";
            $this->user = "root";
            $this->password = "123";
        }
        public function Conectar(){
            echo "Se conectó a Oracle";
        }
        public function Desconectar(){
            echo "Se Desconectó de Oracle";
        }
    }
?>