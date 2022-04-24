<?php
    require_once '../controller/sliderController3.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new sliderController3;
    $delete->delete($id);
?>