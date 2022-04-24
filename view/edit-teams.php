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
    require_once '../controller/teamsController.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $e = new teamsController;
    $edit = $e->edit($id);

    if(isset($_POST['submit'])){
        $e->update($_POST, $id);
    }
?>

<div id="dashboard">
    <table>
        <tr>
        <th>Linku</th>
            <th>Foto</th>
            <th>Titulli</th>
            <th>Kategoria</th>
            <th>Pershkrimi</th>   
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "linku" value = "<?php echo $edit['linku']; ?>"></td>
            <td><input type="text" name = "foto" value = "<?php echo $edit['foto']; ?>"></td>
            <td><input type="text" name = "emri" value = "<?php echo $edit['emri']; ?>"></td>
            <td><input type="text" name = "kategoria" value = "<?php echo $edit['kategoria']; ?>"></td>
            <td><input type="text" name = "pershkrimi" value = "<?php echo $edit['pershkrimi']; ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>