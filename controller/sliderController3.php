<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';
    
    class sliderController3{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM sliderrr');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['linku'] = $request['linku'];
            $request['foto'] = './image/'. $request['foto'];
            $query = $this->db->pdo->prepare('INSERT into sliderrr (linku, foto, nenkategoria) VALUES (:linku, :foto, :nenkategoria)');

            $query->bindParam(":linku", $request['linku']);
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":nenkategoria", $request['nenkategoria']);


            $query->execute();

        //    return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM sliderrr where id_slider = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE sliderrr SET linku=:linku, foto = :foto, nenkategoria = :nenkategoria WHERE id_slider = :id');

            $query->bindParam(":linku", $request['linku']);
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":nenkategoria", $request['nenkategoria']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from sliderrr WHERE id_slider = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>