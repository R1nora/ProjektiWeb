<style>
    #dashboard{
        margin-top:20px;
    }
    input{
        background-color:orange;
        color:black;
        padding:3px 7px;
        font-size: bold;
    }
    ::placeholder{
        color:white;
    }
    input[type=file]::file-selector-button{
        background-color:red;
        border:none;
    }
    input[type=submit]{
        padding:3px 7px;
    }
</style>

<?php
    session_start();
    require_once '../controller/pricingController.php';

    $insert = new pricingController;
    if (isset($_POST['submit'])){
        $insert->insert($_POST);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Lloji</th>
            <th>Shuma</th>
            <th>Kategoria</th>
            <th>sherbimi1</th>
            <th>sherbimi2</th>
            <th>sherbimi3</th>
            <th>sherbimi4</th>

        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "Lloji" placeholder = "Shto llojin..." ></td>
            <td><input type="text" name = "Vlera" placeholder = "Shto vlera..."></td>
            <td><input type="text" name = "Kategoria" placeholder = "Shto kategorin..."></td>
            <td><input type="text" name = "sherbimi1" placeholder = "Shto sherbimin..."></td>
            <td><input type="text" name = "sherbimi2" placeholder = "Shto sherbimin..."></td>
            <td><input type="text" name = "sherbimi3" placeholder = "Shto sherbimin..."></td>
            <td><input type="text" name = "sherbimi4" placeholder = "Shto sherbimin..."></td>
           <td><input type="submit" name = "submit" value = "Save"></td>
        </tr>
        </form>
    </table>
</div>