<?php
    require_once '../controller/ofertatController.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new ofertatController;
    $delete->delete($id);
?>