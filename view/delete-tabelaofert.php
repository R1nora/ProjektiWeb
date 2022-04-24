<?php
    require_once '../controller/tabelaofertController.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new tabelaofertController;
    $delete->delete($id);
?>