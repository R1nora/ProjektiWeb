<?php
    require_once '../controller/teamsController.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new teamsController;
    $delete->delete($id);
?>