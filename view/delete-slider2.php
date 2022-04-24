<?php
    require_once '../controller/sliderController2.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new sliderController2;
    $delete->delete($id);
?>