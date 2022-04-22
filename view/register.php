<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" name="name" placeholder="name..."><br><br>
        <input type="text" name="email" placeholder="name..."><br><br>
        <input type="text" name="phone" placeholder="name..."><br><br>
        <input type="text" name="password" placeholder="name..."><br><br>
        <input type="submit" name="registerBtn" placeholder="register..."><br><br>

    </form>
   <?php include_once '../controller/userController.php';?>
</body>
</html>