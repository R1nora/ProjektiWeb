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
    require_once '../controller/reviewsController.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $es = new reviewsController;
    $edit = $es->edit($id);

    if (isset($_POST['submit'])){
        $es->update($_POST, $id);
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
            <td><input type="text" name = "emri" value = "<?php echo $edit['emri'] ?>"></td>
            <td><input type="text" name = "rating" value = "<?php echo $edit['rating'] ?>"></td>
            <td><input type="text" name = "pershkrimi" value = "<?php echo $edit['pershkrimi'] ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>