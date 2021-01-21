
<?php
     require '../controllers/LajmetController.php';

    $lajm = new LajmetController;

 

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $l = $lajm->edit($id);

    if(isset($_POST['submitted'])) {
        $lajm->update($id, $_POST);
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


    <div class="edit-forma-kursit">
         <form action="" method="POST">

         <div class="tekstiKurs">

            <label for="titulli">Titulli</label>
            <input type="text" value="<?php echo $l['titulli']; ?>" id="titulli" name="titulli">
            <label for="pershkrimi">Pershkrimi</label>
            <textarea name="pershkrimi" cols=40  rows=7> <?php echo $l['pershkrimi'] ?></textarea> 
            <button type="submit" id="updateBtn" name="submitted"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE</button>

        </div>

        <div class="fotoKurs">
            <img src="../images/<?php echo $l['foto'];?>" />
            <input id="file" type="file" name="foto"><br>
         </div>
            </form>

</div>


</body>
</html>




