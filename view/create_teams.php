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
    require_once '../controller/teamsController.php';

    $insert = new teamsController;
    if (isset($_POST['submit'])){
        $insert->insert($_POST);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Linku</th>
            <th>Foto</th>
            <th>Emri</th>
            <th>Kategoria</th>
            <th>Pershkrimi</th>

        </tr>
        <form method = "POST">
        <tr>
            <td><input type="file" name = "linku" placeholder = "Shto linkun..."></td>
            <td><input type="file" name = "foto" placeholder = "Shto foton..."></td>
            <td><input type="text" name = "emri" placeholder = "Shto emrin..."></td>
            <td><input type="text" name = "kategoria" placeholder = "Shto kategorin..."></td>
            <td><input type="text" name = "pershkrimi" placeholder = "Shto pershkrimin..."></td>
            <td><input type="submit" name = "submit" value = "Save"></td>
        </tr>
        </form>
    </table>
</div>