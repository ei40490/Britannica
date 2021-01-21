<?php
   require '../controllers/UserController.php';

    $admin = new UserController;

   

    if(isset($_POST['submitted'])) {
        $admin->store($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php include './includes/side.php'?>
     

    <div class="containerCreate">
        <form action="" method="POST">
            <label for="fname">First Name</label>
            <input id="fname" type="text" name="fullName">

            <label for="lname">Email</label>
            <input id="lname" type="text" name="email">

            <label for="lname">Password</label>
            <input id="password" type="password" name="password"><br><br>

            <label for="isAdmin">Is Admin?</label>
            <input type="checkbox" name="is_admin">
            <button id="signup"  type="submit" name="submitted">Krijo</button>
        </form>
    </div>

<div class="foto"><img src="https://www.zimbra.com/wp-content/uploads/2016/08/Zimbra-Admin-Plus-Image-2.png"></div>

</body>
</html>

<style>

