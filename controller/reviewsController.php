<?php
    require_once 'C:\xampp\htdocs\WebProject\database\Database.php';
    
    class reviewsController{
        public $db;
        public function __construct(){
            $this->db=new Database;
        }
    
    
    public function readData(){
        $query = $this -> db -> pdo -> query('SELECT * from reviewss');
        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO reviewss (emri, rating, pershkrimi)
        VALUES (:emri, :rating, :pershkrimi)');

        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':rating', $request['rating']);
        $query->bindParam(':pershkrimi', $request['pershkrimi']);
        $query->execute();

    
    }
    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from reviewss WHERE id_reviews = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE reviewss SET emri = :emri,
        rating = :rating, pershkrimi = :pershkrimi WHERE id_reviews = :id');
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':rating', $request['rating']);
        $query->bindParam(':pershkrimi', $request['pershkrimi']);
        $query->bindParam(':id', $id);
        $query->execute();
    }
    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from reviewss WHERE id_reviews=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: Dashboard.php");
    }
}
?>