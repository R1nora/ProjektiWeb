<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';
    
    
    class ofertatController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM oferta join tabelaofert');
            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT into oferta (titulli, nentitulli, cmimipazbritje, zbritja, cmimimezbritje, renew, id_tabela ) VALUES (:titulli, :nentitulli, :cmimipazbritje, :zbritja, :cmimimezbritje, :renew, :id_tabela) where tabelaofert.id_tabela=oferta.id_oferta');

            $query->bindParam(":titulli", $request['titulli']);
            $query->bindParam(":nentitulli", $request['nentitulli']);
            $query->bindParam(":cmimipazbritje", $request['cmimipazbritje']);
            $query->bindParam(":zbritja", $request['zbritja']);
            $query->bindParam(":cmimimezbritje", $request['cmimimezbritje']);
            $query->bindParam(":renew", $request['renew']);
            $query->bindParam(":id_tabela", $request['id_tabela']);
            $query->execute();
            return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM oferta JOIN tabelaofert ON tabelaofert.id_tabela=oferta.id_oferta where id_oferta = :id');
            $query->bindParam(":id", $id);
            $query->execute();
            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE oferta SET titulli=:titulli, nentitulli = :nentitulli,  cmimipazbritje = :cmimipazbritje, zbritja = :zbritja, cmimimezbritje = :cmimimezbritje, renew= :renew, id_tabela=:id_tabela JOIN tabelaofert ON tabelaofert.id_tabela=oferta.id_oferta WHERE id_oferta = :id');
            $query->bindParam(":titulli", $request['titulli']);
            $query->bindParam(":nentitulli", $request['nentitulli']);
            $query->bindParam(":cmimipazbritje", $request['cmimipazbritje']);
            $query->bindParam(":zbritja", $request['zbritja']);
            $query->bindParam(":cmimimezbritje", $request['cmimimezbritje']);
            $query->bindParam(":renew", $request['renew']);
            $query->bindParam(":id_tabela", $request['id_tabela']);
            $query->execute();
            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from oferta WHERE id_oferta = :id');
            $query->bindParam(":id", $id);
            $query->execute();
            return header('Location: ../views/dashboard.php');
        }
    }
?>