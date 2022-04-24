<?php
    require_once '../controller/userController.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new userController;

    $delete->delete($id);
?>