<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';

    class userController{
        public $db;
    
        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from userss');
    
            return $query->fetchAll();
        }


        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO userss (email, password)
            VALUES (:email, :password)');
    
            $query->bindParam(':email', $request['email']);
            $query->bindParam(':password', $request['password']);

            $query->execute();
    
            return header('Location: ../index.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM userss where id_user = :id');

            $query->bindParam(":id", $id);

            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE userss SET email = :email , password=:password WHERE id_user = :id');
            $query->bindParam(":email", $request['email']);
            $query->bindParam(':password', $request['password']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }


        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from userss where id_user = :id');
            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>