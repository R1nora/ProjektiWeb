<?php
    require_once '../controller/sliderController.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new sliderController;
    $delete->delete($id);
?>