<?php
    class Cuenta{

        private int $id;
        private string $cliente;
        
        public function __construct(int $id, string $cliente) {
            $this->id = $id;
            $this->cliente = $cliente;
        }
    
        public function getId():int {
            return $this->id;
        }
    
        public function setId(int $id) {
            $this->id = $id;
        }
    
        public function getCliente():string {
            return $this->cliente;
        }
    
        public function setCliente(string $cliente) {
            $this->cliente = $cliente;
        }
    
    }
?>