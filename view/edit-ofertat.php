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
    require_once '../controller/ofertatController.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $e = new ofertatController;
    $edit = $e->edit($id);

    if(isset($_POST['submit'])){
        $e->update($_POST, $id);
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
            <td><input type="text" name = "titulli" value = "<?php echo $edit['titulli']; ?>"></td>
            <td><input type="text" name = "nentitulli" value = "<?php echo $edit['nentitulli']; ?>"></td>
            <td><input type="text" name = "cmimipazbritje" value = "<?php echo $edit['cmimipazbritje']; ?>"></td>
            <td><input type="text" name = "zbritja" value = "<?php echo $edit['zbritja']; ?>"></td>
            <td><input type="text" name = "cmimimezbritje" value = "<?php echo $edit['cmimimezbritje']; ?>"></td>
            <td><input type="text" name = "renew" value = "<?php echo $edit['renew']; ?>"></td>
            <td><input type="text" name = "renew" value = "<?php echo $edit['id_tabela']; ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>