<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';
    
    class tabelaofertController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM tabelaofert');

            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT into tabelaofert (p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12) VALUES (:p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12)');

            $query->bindParam(":p1", $request['p1']);
            $query->bindParam(":p2", $request['p2']);
            $query->bindParam(":p3", $request['p3']);
            $query->bindParam(":p4", $request['p4']);
            $query->bindParam(":p5", $request['p5']);
            $query->bindParam(":p6", $request['p6']);
            $query->bindParam(":p7", $request['p7']);
            $query->bindParam(":p8", $request['p8']);
            $query->bindParam(":p9", $request['p9']);
            $query->bindParam(":p10", $request['p10']);
            $query->bindParam(":p11", $request['p11']);
            $query->bindParam(":p12", $request['p12']);


            $query->execute();

        //    return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM tabelaofert where id_tabela = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE tabelaofert SET p1=:p1, p2 = :p2, p3 = :p3,p4 = :p4,p5 = :p5,p6 = :p6,p7 = :p7,p8 = :p8,p9 = :p9,p10 = :p10,p11 = :p11,p12 = :p12 WHERE id_tabela = :id');
            $query->bindParam(":p1", $request['p1']);
            $query->bindParam(":p2", $request['p2']);
            $query->bindParam(":p3", $request['p3']);
            $query->bindParam(":p4", $request['p4']);
            $query->bindParam(":p5", $request['p5']);
            $query->bindParam(":p6", $request['p6']);
            $query->bindParam(":p7", $request['p7']);
            $query->bindParam(":p8", $request['p8']);
            $query->bindParam(":p9", $request['p9']);
            $query->bindParam(":p10", $request['p10']);
            $query->bindParam(":p11", $request['p11']);
            $query->bindParam(":p12", $request['p12']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from tabelaofert WHERE id_tabela = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>