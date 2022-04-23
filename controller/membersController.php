<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';
    
    class membersController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM member');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['image'] = './image/'.$request['image'];
            $request['image2'] = './image/'.$request['image2'];
            $query = $this->db->pdo->prepare('INSERT into member (emri, pershkrimi, phone, fax, image, image2) VALUES (:emri, :pershkrimi, :phone, :fax, :image, :image2)');

            $query->bindParam(":emri", $request['emri']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);
            $query->bindParam(":phone", $request['phone']);
            $query->bindParam(":fax", $request['fax']);
            $query->bindParam(":image", $request['image']);
            $query->bindParam(":image2", $request['image2']);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM member where id_member = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE member SET emri=:emri, pershkrimi = :pershkrimi,  phone = :phone, fax = :fax, image = :image, image2= :image2 WHERE id_member = :id');
            $query->bindParam(":emri", $request['emri']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);




            +
            $query->bindParam(":phone", $request['phone']);
            $query->bindParam(":fax", $request['fax']);
            $query->bindParam(":image", $request['image']);
            $query->bindParam(":image2", $request['image2']);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from member WHERE id_member = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>