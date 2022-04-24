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
    require_once '../controller/sliderController2.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $es = new sliderController2;
    $edit = $es->edit($id);

    if (isset($_POST['submit'])){
        $es->update($_POST, $id);
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
            <td><input type="text" name = "linku" value = "<?php echo $edit['linku']; ?>"></td>
            <td><input type="text" name = "foto" value = "<?php echo $edit['foto']; ?>"></td>
            <td><input type="text" name = "nenkategoria" value = "<?php echo $edit['nenkategoria']; ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>