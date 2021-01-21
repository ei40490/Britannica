<?php 

require '../controllers/ContactController.php';

$con = new ContactController;
$cont = $con->all();



if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $con->destroy($id);
}

?>