<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';
    
    class teamsController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM team');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['linku'] = $request['linku'];
            $request['foto'] = './image/'.$request['foto'];
            $query = $this->db->pdo->prepare('INSERT into team (linku,foto, emri, kategoria,pershkrimi) VALUES (:linku, :foto,  :emri, :kategoria, :pershkrimi)');

            $query->bindParam(":linku", $request['linku']);
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":emri", $request['emri']);
            $query->bindParam(":kategoria", $request['kategoria']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);

            $query->execute();

            // return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM team where id_teams = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE team SET linku=:linku, foto = :foto,  emri = :emri, kategoria = :kategoria, pershkrimi = :pershkrimi WHERE id_teams = :id');

            $query->bindParam(":linku", $request['linku']);
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":emri", $request['emri']);
            $query->bindParam(":kategoria", $request['kategoria']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from team WHERE id_teams = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>