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
    require_once '../controller/ofertatController.php';

    $insert = new ofertatController;
    if (isset($_POST['submit'])){
        $insert->insert($_POST);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>titulli</th>
            <th>nentitulli</th>
            <th>cmimipazbritje</th>
            <th>zbritja</th>
            <th>cmimimezbritje</th>
            <th>renew</th>
            <th>tabelaofert</th>

        </tr>
        <form method = "POST">
        <tr>

            <td><input type="text" name = "titulli" placeholder = "Shto titullin..."></td>
            <td><input type="text" name = "nentitulli" placeholder = "Shto nentitullin..."></td>
            <td><input type="text" name = "cmimipazbritje" placeholder = "Shto cmiminpazbritje..."></td>
            <td><input type="text" name = "zbritja" placeholder = "Shto zbritjen..."></td>
            <td><input type="text" name = "cmimimezbritje" placeholder = "Shto cmiminmezbritje..." ></td>
            <td><input type="text" name = "renew" placeholder = "Shto renew..."></td>
            <td><input type="text" name = "tabelaofert" placeholder = "Shto tabelenofert..."></td>
            <td><input type="submit" name = "submit" value = "Save"></td>
        </tr>
        </form>
    </table>
</div>