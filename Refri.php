<?php
    class Refri{
        private $conexao;
        private $id;
        private $marca;
        private $sabor;
        private $quantidade;

        public function __construct($db) {
            $this->conexao = $db;
        }
        public function setId($id)
    {
        $this->id = $id;
    }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function setSabor($sabor){
            $this->sabor = $sabor;
        }

        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        
        public function create() {
            $query = "INSERT INTO refrigerante SET marca=:marca, sabor=:sabor, quantidade=:quantidade";
            $stmt = $this->conexao->prepare($query);

            $stmt->bindParam(":marca", $this->marca);
            $stmt->bindParam(":sabor", $this->sabor);
            $stmt->bindParam(":quantidade", $this->quantidade);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        }
        public function read() {
            $query = "SELECT * FROM refrigerante";
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        
        public function delete() {
            $query = "DELETE FROM refrigerante WHERE id=:id";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindParam(":id", $this->id);
            if ($stmt->execute()) {
                return true;
            }
            return false;
        } 
        public function update(){
            $query = "UPDATE refrigerante SET marca=:marca, sabor=:sabor, quantidade=:quantidade WHERE id=:id";
            $stmt = $this->conexao->prepare($query);
            
            $stmt->bindParam(":marca", $this->marca);
            $stmt->bindParam(":sabor", $this->sabor);
            $stmt->bindParam(":quantidade", $this->quantidade);
            $stmt->bindParam(":id", $this->id);
    
            if($stmt->execute()){
                return true;
            }
    
            return false;
        }
        public function consultar(){
            $query = "SELECT * FROM refrigerante WHERE id=:id";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindParam(":id", $this->id);
            $stmt->execute();
    
            return $stmt;
        }
            
    }
?>