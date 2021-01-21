<?php 

require '../controllers/KursetController.php';

$kurs = new KursetController;
$kurset = $kurs->all();



if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $kurs->destroy($id);
}

?>