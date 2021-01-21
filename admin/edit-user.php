
<?php
     require '../controllers/UserController.php';

    $user = new UserController;

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $useri = $user->edit($id);

    if(isset($_POST['submitted'])) {
        $user->update($id, $_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


<?php include './includes/side.php' ?>


<div class="edit-forma">
    <form action="" method="POST">
        
        <div class="form-row">
            <label for="fullName">Emri: </label>
            <input type="text" value="<?php echo $useri['name']; ?>" id="fullName" name="fullName">
        </div>

        <div class="form-row">
            <label for="email">Email: </label>
             <input type="text" value="<?php echo $useri['email']; ?>" id="email" name="email">
        </div>

               
                <div id="chb">
                <label for="is_admin">Is Admin ? : </label>
                 <input type="checkbox"  <?php echo $useri['is_admin'] === '1' ? 'checked' : '' ?> id= "is_admin" name="is_admin">
            </div>
        <button type="submit" id="updateBtn" name="submitted"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE</button>
    </form>
<div>



</body>
</html>