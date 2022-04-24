<?php
    require_once '../controller/pricingController.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $delete = new pricingController;
    $delete->delete($id);
?>