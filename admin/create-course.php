<?php
   require '../controllers/KursetController.php';

    $kurset = new KursetController;

 

    if(isset($_POST['submitted'])) {
        $kurset->store($_POST);
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>
</head>
<body>

<?php include './includes/side.php'?>

    <div class="addKurset">
        <form action="" method="POST">
            <label >Sheno titullin</label>
            <input  type="text" name="titulli">
            <label >Sheno pershkrimin</label>
            <input  type="text" name="pershkrimi">
            <label >Zgjedh foton</label><br>
            <input id="file" type="file" name="foto"><br>
            <button  id="krijoKursBtn" type="submit" name="submitted">Krijo</button>
        </form>
    </div>



</body>
</html>