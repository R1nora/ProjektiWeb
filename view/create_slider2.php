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
    require_once '../controller/sliderController2.php';

    $insert = new sliderController2;

    if(isset($_POST['submit'])){
        $insert->insert($_POST);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Linku</th>
            <th>Foto</th>
            <th>Nenkategoria</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="file" name = "linku" placeholder = "Shto linkun..."></td>
            <td><input type="file" name = "foto" placeholder = "Shto foto..."></td>
            <td><input type="text" name = "nenkategoria" placeholder = "Shto nenkategorin..."></td>
            <td><input type="submit" name = "submit" value = "Save"></td>
        </tr>
        </form>
    </table>
</div>