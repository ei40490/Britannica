<?php 

require '../controllers/LajmetController.php';

$lajm = new LajmetController;
$lajmet = $lajm->all();



if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $lajm->destroy($id);
}

?>