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
  
    input[type=submit]{
        padding:3px 7px;
    }
</style>
<?php
    require_once '../controller/tabelaofertController.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $to = new tabelaofertController;
    $tab = $to->edit($id);

    if (isset($_POST['submit'])){
        $es3->update($_POST, $id);
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
            <td><input type="text" name = "linku" value = "<?php echo $tab['p1']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p2']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p3']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p4']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p5']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p6']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p7']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p8']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p9']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p10']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p11']; ?>"></td>
            <td><input type="text" name = "linku" value = "<?php echo $tab['p12']; ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>