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
    require_once '../controller/reviewsController.php';

    $insert = new reviewsController;

    if(isset($_POST['submit'])){
        $insert->insert($_POST);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Emri</th>
            <th>Rating</th>
            <th>Pershkrimi</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "emri" placeholder = "Shto emrin..."></td>
            <td><input type="text" name = "rating" placeholder = "Shto rating..."></td>
            <td><input type="text" name = "pershkrimi" placeholder = "Shto pershkrimin..."></td>
            <td><input type="submit" name = "submit" value = "Save"></td>
        </tr>
        </form>
    </table>
</div>