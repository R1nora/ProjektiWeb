<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';
    
    class pricingController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM pricingg');

            return $query->fetchAll();
        }

        public function insert($request){

            $query = $this->db->pdo->prepare('INSERT into pricingg (Lloji,Vlera, Kategoria, sherbimi1, sherbimi2, sherbimi3, sherbimi4) VALUES (:Lloji, :Vlera,  :Kategoria, :sherbimi1, :sherbimi2, :sherbimi3, :sherbimi4)');

            $query->bindParam(":Lloji", $request['Lloji']);
            $query->bindParam(":Vlera", $request['Vlera']);
            $query->bindParam(":Kategoria", $request['Kategoria']);
            $query->bindParam(":sherbimi1", $request['sherbimi1']);
            $query->bindParam(":sherbimi2", $request['sherbimi2']);
            $query->bindParam(":sherbimi3", $request['sherbimi3']);
            $query->bindParam(":sherbimi4", $request['sherbimi4']);

            $query->execute();

        //     return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM pricingg where id_pricing = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE pricingg SET Lloji=:Lloji, Vlera = :Vlera,  Kategoria = :Kategoria, sherbimi1 = :sherbimi1, sherbimi2=:sherbimi2, sherbimi3=:sherbimi3, sherbimi4=:sherbimi4 WHERE id_pricing = :id');

            $query->bindParam(":Lloji", $request['Lloji']);
            $query->bindParam(":Vlera", $request['Vlera']);
            $query->bindParam(":Kategoria", $request['Kategoria']);
            $query->bindParam(":sherbimi1", $request['sherbimi1']);
            $query->bindParam(":sherbimi2", $request['sherbimi2']);
            $query->bindParam(":sherbimi3", $request['sherbimi3']);
            $query->bindParam(":sherbimi4", $request['sherbimi4']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from pricingg WHERE id_pricing = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>