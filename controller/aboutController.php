<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';

    
    class aboutController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM about');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['image1'] = './image/'.$request['image1'];
            $request['image2'] = './image/'.$request['image2'];
            $request['image3'] = './image/'.$request['image3'];
            $query = $this->db->pdo->prepare('INSERT into about (Titull, pershkrim1, nentitulli1, pershkrimi2, nentitulli2,pershkrimi3,nentitulli3, pershkrimi4, image1, image2, image3) VALUES (:Titull, :pershkrim1, :nentitulli1, :pershkrimi2, :nentitulli2, :pershkrimi3, :nentitulli3, :pershkrimi4, :image1, :image2, :image3)');

            $query->bindParam(":Titull", $request['Titull']);
            $query->bindParam(":pershkrim1", $request['pershkrim1']);
            $query->bindParam(":nentitulli1", $request['nentitulli1']);
            $query->bindParam(":pershkrimi2", $request['pershkrimi2']);
            $query->bindParam(":nentitulli2", $request['nentitulli2']);
            $query->bindParam(":pershkrimi3", $request['pershkrimi3']);
            $query->bindParam(":nentitulli3", $request['nentitulli3']);
            $query->bindParam(":pershkrimi4", $request['pershkrimi4']);
            $query->bindParam(":image1", $request['image1']);
            $query->bindParam(":image2", $request['image2']);
            $query->bindParam(":image3", $request['image3']);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM about where id_about = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE about SET Titull=:Titull, pershkrim1 = :pershkrim1,  pershkrimi2 = :pershkrimi2, fax = :fax, image = :image, image2= :image2 WHERE id_about = :id');
            $query->bindParam(":Titull", $request['Titull']);
            $query->bindParam(":pershkrim1", $request['pershkrim1']);
            $query->bindParam(":nentitulli1", $request['nentitulli1']);
            $query->bindParam(":pershkrimi2", $request['pershkrimi2']);
            $query->bindParam(":nentitulli2", $request['nentitulli2']);
            $query->bindParam(":pershkrimi3", $request['pershkrimi3']);
            $query->bindParam(":nentitulli3", $request['nentitulli3']);
            $query->bindParam(":pershkrimi4", $request['pershkrimi4']);
            $query->bindParam(":image1", $request['image1']);
            $query->bindParam(":image2", $request['image2']);
            $query->bindParam(":image3", $request['image3']);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from about WHERE id_about = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>