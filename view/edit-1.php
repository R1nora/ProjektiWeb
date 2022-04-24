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
    require_once '../controller/userController.php';
    if(isset($_GET['id'])){
        $Id = $_GET['id'];
    }

    $rv = new userController;
    $currentrv = $rv->edit($Id );


    if (isset($_POST['submit'])){
        $rv->update($_POST, $Id );
    }

?>

<div id="dashboard">
    <table>
        <tr>
          
            <th>Email</th>
            <th>Password</th>

        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "email" value = "<?php echo $currentrv['email']; ?>"></td>
            <input type="text" name="password" value="<?php echo $currentrv['password'];?>">
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>