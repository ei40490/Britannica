<?php
    require '../controllers/UserController.php';

    $user = new UserController;
    $users = $user->all();

    
    if(isset($_POST['submitted'])){
        $a = $_POST['opsionet'];
        $user->destroy($a);
    }

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $user->destroy($id);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Test</title>
</head>
<body>


<?php include './includes/side.php';?>

<form method="post" action="delete-user.php" >   
            <h3 class="emertimet">ID Name Email </h3>
            <div class="dizajniOpsionev">
            <select name ='opsionet'>
            <?php foreach($users as $user ) : ?>
            <option class="opsionet" name"" value="<?php echo $user['id']; ?>" > <?php echo $user['id'].  " | " . $user['name']. " --- " . $user['email'] . " ---  " . $user['created_date']; ?> </option>
        
             <?php endforeach ?>

         
           </select>
        <button type="submit" name="submitted" id="fshijBtn" onclick="return confirm('A jeni i sigurt qe doni te fshini kete perdorues?')" ><i class="fa fa-trash"></i> Delete</button>
            </div>

       
 </form> 

</body>
</html>