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
    require_once '../controller/sliderController3.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $es3 = new sliderController3;
    $edit3 = $es3->edit($id);

    if (isset($_POST['submit'])){
        $es3->update($_POST, $id);
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
            <td><input type="text" name = "linku" value = "<?php echo $edit3['linku']; ?>"></td>
            <td><input type="text" name = "foto" value = "<?php echo $edit3['foto']; ?>"></td>
            <td><input type="text" name = "nenkategoria" value = "<?php echo $edit3['nenkategoria']; ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>