<?php

$nameErr = $emailErr = $kerse_ankesErr = $mesazhiErr = "";
$name = $email = $gender = $mesazhi = $number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["number"])) {
    $number = "";
  } else {
    $number = test_input($_POST["number"]);
  }

  if (empty($_POST["mesazhi"])) {
    $mesazhi = "";
  } else {
    $comment = test_input($_POST["mesazhi"]);
  }

  if (empty($_POST["kerse_ankes"])) {
    $kerse_ankesErr = "kerkes ose ankes";
  } else {
    $gender = test_input($_POST["kerse_ankes"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>












?>