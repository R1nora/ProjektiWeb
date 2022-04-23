<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';
    
    class sliderController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM slider');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['linku'] = $request['linku'];
            $request['foto'] = './image/'. $request['foto'];
            $query = $this->db->pdo->prepare('INSERT into slider (linku, foto, nenkategoria) VALUES (:linku, :foto, :nenkategoria)');

            $query->bindParam(":linku", $request['linku']);
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":nenkategoria", $request['nenkategoria']);


            $query->execute();

        //    return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM slider where id_slider = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE slider SET linku=:linku, foto = :foto, nenkategoria = :nenkategoria WHERE id_slider = :id');
            $query->bindParam(":linku", $request['linku']);
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":nenkategoria", $request['nenkategoria']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from slider WHERE id_slider = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>