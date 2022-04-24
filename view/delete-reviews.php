<?php
    require_once '../controller/reviewsController.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new reviewsController;
    $delete->delete($id);
?>