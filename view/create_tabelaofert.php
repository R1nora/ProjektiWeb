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
    require_once '../controller/tabelaofertController.php';

    $insert = new tabelaofertController;
    if (isset($_POST['submit'])){
        $insert->insert($_POST);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Pershkrimi1</th>
            <th>Pershkrimi2</th>
            <th>Pershkrimi3</th>
            <th>Pershkrimi4</th>
            <th>Pershkrimi5</th>
            <th>Pershkrimi6</th>
            <th>Pershkrimi7</th>
            <th>Pershkrimi8</th>
            <th>Pershkrimi9</th>
            <th>Pershkrimi10</th>
            <th>Pershkrimi11</th>
            <th>Pershkrimi12</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "p1" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p2" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p3" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p4" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p5" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p6" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p7" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p8" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p9" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p10" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p11" placeholder = "Shto pershkrimin..."></td>
            <td><input type="text" name = "p12" placeholder = "Shto pershkrimin..."></td>
          
            <td><input type="submit" name = "submit" value = "Save"></td>
        </tr>
        </form>
    </table>
</div>