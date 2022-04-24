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
    require_once '../controller/pricingController.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $e = new pricingController;
    $edit = $e->edit($id);

    if(isset($_POST['submit'])){
        $e->update($_POST, $id);
    }
?>

<div id="dashboard">
    <table>
        <tr>
        <th>Lloji</th>
            <th>Vlera</th>
            <th>Kategoria</th>
            <th>sherbimi1</th>
            <th>sherbimi2</th>
            <th>sherbimi3</th>
            <th>sherbimi4</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "Lloji" value = "<?php echo $edit['Lloji']; ?>"></td>
            <td><input type="text" name = "Vlera" value = "<?php echo $edit['Vlera']; ?>"></td>
            <td><input type="text" name = "Kategoria" value = "<?php echo $edit['Kategoria']; ?>"></td>
            <td><input type="text" name = "sherbimi1" value = "<?php echo $edit['sherbimi1']; ?>"></td>
            <td><input type="text" name = "sherbimi2" value = "<?php echo $edit['sherbimi2']; ?>"></td>
            <td><input type="text" name = "sherbimi3" value = "<?php echo $edit['sherbimi3']; ?>"></td>
            <td><input type="text" name = "sherbimi4" value = "<?php echo $edit['sherbimi4']; ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>