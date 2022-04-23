<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';

//e kryne
    class userController{
        public $db;
    
        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from userss');
    
            return $query->fetchAll();
        }

        public function readDataWithoutPass(){
            $query = $this->db->pdo->query('SELECT ID_User, name, username, email FROM userss');

            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO userss (name, username, email, password)
            VALUES (:name, :username, :email, :password)');
    
            $query->bindParam(':name', $request['name']);
            $query->bindParam(':username', $request['username']);
            $query->bindParam(':email', $request['email']);
            $query->bindParam(':password', $request['password']);
            $query->execute();
    
            return header('Location: ../index.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT ID_User, name, username, email FROM userss where ID_User = :id');
            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE userss SET name = :name, username = :username, email = :email WHERE ID_User = :id');
            $query->bindParam(":name", $request['emri1']);
            $query->bindParam(":username", $request['username1']);
            $query->bindParam(":numriTel", $request['numriTel1']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }


        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from userss where ID_User = :id');
            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>